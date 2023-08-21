<template>
     <div class="data_box">
                <!-- data box header -->
                <div class="data_box_header">
                    <div class="option_btns">
                        <select name="" class="sort_per_page" id="" v-model="tData.length" @change="getPerPage">
                            <option v-for="(pp,key) in perPage" :key="key" :value="pp">{{pp}}</option>
                        </select>
                        <button class="excel_export_btn" @click="export_to_excel">Excel</button>
                    </div>
                    <div class="search_btn">
                        <input type="text" class="input_control" v-model="tData.search" @input="getSearch" placeholder="Rechercher nom,prenom...">
                    </div>
                </div>
                <!-- Table Content Begin -->
                <div class="data_box_content">
                    <!-- The data box content -->
                    <v-table :columns="columns">
                        <tbody>
                            <tr v-if="!roles.length">Pas de roles disponible pour le moment</tr>
                            <tr v-for="(item,key) in roles" :key="key">
                                <td>{{key+=1}}</td>
                                <td>{{item.name}}</td>
                                <td>{{convert(item.created_at)}}</td>
                                <td>
                                    <a href="" @click.prevent="deleteUser(item.id)"><i class="fas fa-trash"></i></a>
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
</template>