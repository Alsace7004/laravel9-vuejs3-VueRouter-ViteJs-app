<template>      
        <div class="users">
            <h3>Hello, Am The User View</h3>
            <h5>Je suis la vue: User</h5>

            <div class="data_box">
                <div class="data_box_header">The data box header</div>
                <!-- Table Content Begin -->
                <div class="data_box_content">
                    <!-- The data box content -->
                    <table>
                        <thead>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Kodjo</td>
                                <td>Mawugnon</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Komlan</td>
                                <td>Mawuegnigan</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Kokou</td>
                                <td>Okeke</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Yao</td>
                                <td>Mawulolo</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Koffi</td>
                                <td>Selom</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Komi</td>
                                <td>Esse</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Kossi</td>
                                <td>Alla</td>
                                <td>Deuxieme</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Table Content End -->
                <div class="data_box_footer">The data box footer</div>
            </div>
        </div>
</template>

<script>
export default {
    setup() {
        
    },
}
</script>

<style scoped>
        .users{
            background-color: #273c75;
            color: #fff;
            display: flex;
            flex-direction: column;
           /*  justify-content: center;
            align-items: center; */
            height: 86.45vh;
            padding: 25px;
        }
        .data_box{
            border: 1px solid red;
            width: 100%;
            /* border-radius: 5px; */
        }
        .data_box_header{
            margin-bottom: 2px solid #fff;
            background-color: maroon;
        }
        .data_box_content{
            background-color: rosybrown;
        }
        .data_box_footer{
            background-color: magenta;
        }
        /*****************TABLE-DESIGN*****************/
        table{
            text-align: center;
            width: 100%;
        }
        table thead th{
            text-transform: capitalize;
            border: 1px solid red;
        }
</style>