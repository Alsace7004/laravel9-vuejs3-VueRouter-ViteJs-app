<template>
    <table>
        <thead>
            <tr>
                <th v-for="column in columns" :key="column.name">{{column.label}}</th>
            </tr>
        </thead>
        <slot></slot>
    </table>
</template>

<script setup>
    defineProps({
        columns:{
            type:Array
        }
    })
</script>
