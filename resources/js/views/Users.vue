<template>      
        <div class="users">
            <h3>Users</h3>
            <div style="margin-bottom:1rem">
                <button class="excel_export_btn" @click="show_Modal">Show Modal</button>
                <button class="excel_export_btn" @click="dialogState = true">Open Dialog</button>
            </div>
            
            <div class="data_box">
                <!-- data box header -->
                <div class="data_box_header">
                    <div class="option_btns">
                        <select name="" class="sort_per_page" id="" v-model="tData.length" @change="getPerPage">
                            <option v-for="(pp,key) in perPage" :key="key" :value="pp">{{pp}}</option>
                        </select>
                        <button class="excel_export_btn" @click="export_to_excel">Excel</button>
                        <button class="excel_export_btn" @click="previewPdf">Preview PDF</button>
                        <button class="excel_export_btn" @click="previewBillPdf">Preview Bill PDF</button>
                        <button class="excel_export_btn" @click="printPDF">download PDF</button>
                    </div>
                    <div class="search_btn">
                        <input type="text" class="input_control" v-model="tData.search" @input="getSearch" placeholder="Rechercher nom,prenom...">
                    </div>
                </div>
                <!-- Table Content Begin -->
                <div id="print-me" class="data_box_content">
                    <!-- The data box content -->
                    <v-table :columns="columns">
                        <tbody style="border:1px solid red">
                            <tr v-if="!users.length">Pas d'utilisateur disponible pour le moment</tr>
                            <tr v-for="(user,key) in users" :key="key">
                                <td>{{key+=1}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td>{{convert(user.created_at)}}</td>
                                <td>
                                    <a href="" @click.prevent="deleteUser(user.id)"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </v-table>
                </div>
                <!-- Table Content End -->
                <!-- data box footer -->
                <div class="data_box_footer">
                    <div class="show_entries">
                        ({{from}}-{{to}} sur {{total}})
                    </div>
                    <div class="pagination_btns">
                        <div class="prev_btn" v-if="prev_page_url" @click="goPrev(prev_page_url)">-</div>
                        <div class="next_btn" v-if="next_page_url" @click="goNext(next_page_url)">+</div>
                    </div>
                </div>
                <!-- data box footer -->
            </div>
            <!-- Proper Modal Begin -->
            <proper-modal v-show="isModalVisible" modalName="user">
                <template v-slot:header>
                    <h4>The Modal title</h4>
                    <button type="button" @click="closeModal()" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </template>
                <template v-slot:body>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Nunc sed velit dignissim sodales ut eu sem integer vitae. Id aliquet lectus proin nibh nisl condimentum. 
                        Fringilla urna porttitor rhoncus dolor purus. Nam aliquam sem et tortor. Nisl vel pretium lectus quam id. 
                        Cras pulvinar mattis nunc sed. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. 
                        Tristique magna sit amet purus. Fermentum et sollicitudin ac orci phasellus egestas tellus. 
                        Erat pellentesque adipiscing commodo elit at imperdiet dui accumsan. Felis eget nunc lobortis mattis aliquam faucibus. 
                        Tincidunt eget nullam non nisi est sit amet facilisis. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. 
                        Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Eget nunc scelerisque viverra mauris in aliquam sem fringilla ut. 
                        Nec nam aliquam sem et tortor consequat id. Commodo nulla facilisi nullam vehicula ipsum a. Elementum tempus egestas sed sed. 
                        Faucibus purus in massa tempor nec feugiat nisl pretium fusce.</p> -->
                    <p>Arcu cursus vitae congue mauris rhoncus aenean. Tempor id eu nisl nunc mi. Pharetra diam sit amet nisl suscipit adipiscing bibendum. 
                        Ut faucibus pulvinar elementum integer enim. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. 
                        Eu non diam phasellus vestibulum lorem sed risus. Porttitor rhoncus dolor purus non enim praesent. 
                        Sit amet mauris commodo quis imperdiet. Lobortis feugiat vivamus at augue eget. Nibh tellus molestie nunc non blandit. 
                        Tellus mauris a diam maecenas sed enim ut. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium. 
                        Mattis aliquam faucibus purus in massa.</p>
                </template>
                <template v-slot:footer>
                    <div>
                        <button class="mdl-btn-danger" @click="closeModal()">Cancel</button>
                        <button class="mdl-btn-primary" @click="closeModal()">Save</button>
                    </div>
                </template>
            </proper-modal>
            <!-- Proper Modal End -->
            <!-- GDialog Modal Begin -->
            <GDialog v-model="dialogState" max-width="500">
                <div class="modal_wrapper">
                    <div class="modal_content">
                        <div class="modal_title">Content</div>

                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Porro, ratione!
                        </p>
                    </div>

                    <div class="modal_actions">
                        <button
                        class="btn btn--outline-gray"
                        @click="dialogState = false"
                        >
                        Submit
                        </button>
                    </div>
                </div> 
            </GDialog>
            
            <!-- GDialog Modal Begin -->
            <!-- SOURCE -->
         
        </div>
</template>

<script setup>
import { onMounted, reactive } from "@vue/runtime-core"
import {ref} from "vue"
import vTable from "../components/vTable/vTable.vue"
import Modal from "../components/Modal.vue"
import ProperModal from "../components/ProperModal.vue"
/*************************************************************/

/*************************************************************/
    /****************GDialog*****Begin*****************/
    const dialogState = ref(false)
    let isModalVisible = ref(false)
    /****************GDialog*****End*******************/
    const modalName = ref()
    /**************************************************/
    let users = ref([])
    /*********************************/
    let current_page    = ref('')
    let last_page       = ref('')
    let last_page_url   = ref('')
    let next_page_url   = ref('')
    let prev_page_url   = ref('')
    let from            = ref('')
    let to              = ref('')
    let total           = ref('')

    let perPage = ref(['5','10','20','30'])
    let columns =[
        {label:'~#',name:'id'},
        {label:'Nom',name:'nom'},
        {label:'Email',name:'email'},
        {label:'Ajouté Le',name:'created_at'},
        {label:'Actions',name:'actions'},
    ]
    /*********************************/
    const tData = reactive({
        search :'',
        length :'5',
    })
    /*********************************/
    const show_Modal = ()=>{
      /*  let k = document.querySelector("#users")
       if(k){
        isModalVisible.value = true
       }
       return  */  
               $("#user").modal("show")
    }
    const goPrev = (ppu)=>{
        //alert("The NPU is:"+ppu)
        axios.get(ppu,{params:tData}).then((res)=>{
            //console.log("Valeur de res dans goNext:",res)
            let content = res.data.users
            users.value = content.data
            configPagination(content)
        }).catch((err)=>{
            console.log("Valeur de err dans goNext:",err)
        })
    }
    const goNext = (npu)=>{
        //alert("The PPU is:"+npu)
        axios.get(npu,{params:tData}).then((res)=>{
            //console.log("Valeur de res dans goNext:",res)
            let content = res.data.users
            users.value = content.data
            configPagination(content)
        }).catch((err)=>{
            console.log("Valeur de err dans goNext:",err)
        })
    }
    /*********************************/
    const showModal = ()=>{
        //isModalVisible.value = true
    }
    const closeModal = ()=>{
        //isModalVisible.value = false
        $("#user").modal("hide")
    }
    /*********************************/
    onMounted(()=>{
        getAllUsers()
        console.log("Valeur du red du modal:",modalName.value)
    })
    const convert=(jour)=>{
            let  date =  new Date(jour);
            return  date.toLocaleDateString('en-GB') // "day-month-year"
    }
    const getAllUsers = ()=>{
        axios.get("api/users",{params:tData}).then((res)=>{
            let content = res.data.users
            console.log("Valeur de content:",content)
            //console.log("Valeur de res:",res.data.users)
            users.value = res.data.users.data
            configPagination(content)
        }).catch((err)=>{
            console.log("Valeur de err:",err)
        })
    }

    const configPagination=(data)=>{
        //console.log("Valeur de data dans configPagination:",data)
        current_page.value    = data.current_page
        last_page.value       = data.last_page
        last_page_url.value   = data.last_page_url
        next_page_url.value   = data.next_page_url
        prev_page_url.value   = data.prev_page_url
        from.value            = data.from
        to.value              = data.to
        total.value           = data.total
    }

    const getSearch = ()=>{
        getAllUsers()
    }

    const getPerPage = ()=>{
        getAllUsers()
    }

    const export_to_excel = ()=>{
        //alert("going to export to excel")
        axios.get("api/holla",{params:tData,responseType: 'arraybuffer'}).then((res)=>{
            let data = res.data
            var fileURL = window.URL.createObjectURL(new Blob([data]));
            var fileLink = document.createElement('a');
            fileLink.href = fileURL;
            fileLink.setAttribute('download', 'users_file_from_vue.xlsx');//final excel file name
            document.body.appendChild(fileLink);
            fileLink.click(); 

            //console.log("Valeur de data dans export_to_excel:",data)
        }).catch((err)=>{
            console.log("Valeur de err dans export_to_excel:",err)
        })
    }

  

    //Download PDF
    const printPDF = ()=>{
        axios({
                url: 'api/downloadPdfMi',
                method: 'GET',
                responseType: 'blob',
                 Accept: 'application/pdf',
            }).then((response) => {
                var fileURL = window.URL.createObjectURL(
                    new Blob([response.data], 
                    )
                );
                var fileLink = document.createElement('a');
                fileLink.href = fileURL;
                fileLink.setAttribute('download', 'download_users.pdf');
                document.body.appendChild(fileLink);
                fileLink.click();
            });            
    }
    //Preview PDF
    const previewPdf = ()=>{
        axios({
                url: 'api/previewPdf',
                method: 'GET',
                responseType: 'blob',
                 Accept: 'application/pdf',
            }).then((response) => {
                var fileURL = window.URL.createObjectURL(
                    new Blob([response.data], 
                    )
                );
                var fileLink = document.createElement('a');
                fileLink.href = fileURL;
                fileLink.setAttribute('target', '_blank');
                document.body.appendChild(fileLink);
                fileLink.click();
            });            
    }
    const previewBillPdf = ()=>{
        axios({
                url: 'api/previewBillPdf',
                method: 'GET',
                responseType: 'blob',
                 Accept: 'application/pdf',
            }).then((response) => {
                var fileURL = window.URL.createObjectURL(
                    new Blob([response.data], 
                    )
                );
                var fileLink = document.createElement('a');
                fileLink.href = fileURL;
                fileLink.setAttribute('target', '_blank');
                document.body.appendChild(fileLink);
                fileLink.click();
            });            
    }
    //
    const deleteUser=(id)=>{
        Swal.fire({
            title: 'Etes-vous sûr?',
            text: "Vous ne pourrez pas annuler cette action !!!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Annuler!',
            confirmButtonText: 'Oui, supprimez-le!'
            }).then((result) => {
            if (result.isConfirmed) {
                    axios.delete(`api/users/${id}`).then((res)=>{
                        Swal.fire('Supprimé!','L\'utilisateur a été supprimé.','success') 
                        getAllUsers()
                    }).catch((err)=>{
                        Swal.fire('Erreur !!!',"Une erreur s'est produite !!!",'error')
                    })
            }else{
                Swal.fire('Conserver !!!',"L'utilisateur est toujours disponible !!!",'success')
            }
        })
    }
   
    
    
</script>

<style scoped>
        .users{
            /* background-color: #273c75; */
            /* background-color: #eaeaea; */
            color: #000;
            display: flex;
            flex-direction: column;
           /*  justify-content: center;
            align-items: center; */
            /* height: 86.45vh; */
            padding: 25px;
        }
        
        /********************************DELETE-BTN********************************/
        .mdl-btn-danger{
            margin-left: 1rem;
            padding: 5px 14px;
            border-radius: 5px;
            background-color: #dd3333;
            color: #fff;
            font-weight: 900;
            cursor: pointer;
        }
        .mdl-btn-primary{
            margin-left: 1rem;
            padding: 5px 14px;
            border-radius: 5px;
            background-color: #2f3640;
            color: #fff;
            font-weight: 900;
            cursor: pointer;
        }
</style>