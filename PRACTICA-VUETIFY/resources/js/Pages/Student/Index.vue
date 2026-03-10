<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { ref } from 'vue'

const desserts = ref([
    {
      name: 'Frozen Yogurt',
      calories: 159,
    },
    {
      name: 'Ice cream sandwich',
      calories: 237,
    },
    {
      name: 'Eclair',
      calories: 262,
    },
    {
      name: 'Cupcake',
      calories: 305,
    },
    {
      name: 'Gingerbread',
      calories: 356,
    },
    {
      name: 'Jelly bean',
      calories: 375,
    },
    {
      name: 'Lollipop',
      calories: 392,
    },
    {
      name: 'Honeycomb',
      calories: 408,
    },
    {
      name: 'Donut',
      calories: 452,
    },
    {
      name: 'KitKat',
      calories: 518,
    },
  ])

</script>

<template>
<AuthenticatedLayout>

<v-table striped="even">
    <thead>
      <tr>
        <th class="text-left">
          Name
        </th>
        <th class="text-left">
          Calories
        </th>
      </tr>
    </thead>
    <tbody>
      <tr
        v-for="item in desserts"
        :key="item.name"
      >
        <td>{{ item.name }}</td>
        <td>{{ item.calories }}</td>
      </tr>
    </tbody>
  </v-table>






 <v-card>
    <v-layout>
      <v-navigation-drawer
        expand-on-hover
        permanent
        rail
      >
        <v-list>
          <v-list-item
            prepend-avatar="https://image2url.com/r2/default/images/1771360358863-98b4b741-f775-4a01-bca9-3c8f2ef59585.jpg"
            :subtitle="$page.props.auth.user.email"
            v-bind:title="$page.props.auth.user.name"
          ></v-list-item>
        </v-list>

        <v-divider></v-divider>

        <v-list density="compact" nav>

    <Link :href="route('students.index')">
    <v-list-item prepend-icon="mdi-account" title="Estudiantes" value="students"></v-list-item>
    </Link>
    <v-list-item prepend-icon="mdi-account-tie" title="Catedratico" value="Docentes"></v-list-item>  
    <v-list-item prepend-icon="mdi-book" title="Cursos" value="Cursos"></v-list-item>
      
        </v-list>
      </v-navigation-drawer>

      <v-main style="height: 250px"></v-main>
    </v-layout>
  </v-card>


</AuthenticatedLayout>
</template>


