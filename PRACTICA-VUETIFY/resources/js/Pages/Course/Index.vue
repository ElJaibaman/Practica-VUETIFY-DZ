<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

const desserts = ref([
  { nombre:'Matematicas I', codigo:'MAT101', descripcion:'Algebra basica', creditos:4, docente:'Juan Perez', periodo:'2026-1', capacidad:30, estado:'Activo' },
  { nombre:'Programacion I', codigo:'INF102', descripcion:'Introduccion a programacion', creditos:5, docente:'Maria Lopez', periodo:'2026-1', capacidad:25, estado:'Activo' },
  { nombre:'Base de Datos', codigo:'INF203', descripcion:'Modelado relacional', creditos:4, docente:'Juan Perez', periodo:'2026-2', capacidad:20, estado:'Activo' },
  { nombre:'Redes', codigo:'INF304', descripcion:'Fundamentos de redes', creditos:3, docente:'Carlos Diaz', periodo:'2026-2', capacidad:35, estado:'Inactivo' },
  { nombre:'Fisica I', codigo:'FIS105', descripcion:'Mecanica clasica', creditos:4, docente:'Ana Torres', periodo:'2026-1', capacidad:40, estado:'Activo' },
  { nombre:'Quimica General', codigo:'QUI106', descripcion:'Conceptos basicos de quimica', creditos:4, docente:'Luis Martinez', periodo:'2026-2', capacidad:30, estado:'Activo' },
  { nombre:'Estadistica', codigo:'EST207', descripcion:'Probabilidad y estadistica', creditos:3, docente:'Maria Lopez', periodo:'2026-3', capacidad:28, estado:'Activo' },
  { nombre:'Ingenieria de Software', codigo:'INF308', descripcion:'Metodologias de desarrollo', creditos:5, docente:'Carlos Diaz', periodo:'2026-3', capacidad:22, estado:'Activo' },
  { nombre:'Sistemas Operativos', codigo:'INF309', descripcion:'Administracion de sistemas', creditos:4, docente:'Juan Perez', periodo:'2026-2', capacidad:26, estado:'Activo' },
  { nombre:'Seguridad Informatica', codigo:'INF410', descripcion:'Proteccion de sistemas', creditos:4, docente:'Ana Torres', periodo:'2026-3', capacidad:24, estado:'Inactivo' }
])
</script>

<template>
  <AuthenticatedLayout>
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
            <v-list-item prepend-icon="mdi-account" title="Estudiantes"></v-list-item>
          </Link>
        <Link :href="route('enrollments.index')">
          <v-list-item prepend-icon="mdi-account-tie" title="Matricula"></v-list-item>
        </Link>
          <v-list-item prepend-icon="mdi-book" title="Cursos"></v-list-item>
        </v-list>
      </v-navigation-drawer>

      <v-main>
        <v-container>

          <v-btn color="cyan" class="mb-4">
            <Link :href="route('courses.create')" class="text-black">
              Crear Cursos
            </Link>
          </v-btn>

          <v-table striped="even">
            <thead>
              <tr>
                <th class="text-left">Nombre</th>
                <th class="text-left">Codigo</th>
                <th class="text-left">Descripcion</th>
                <th class="text-left">Creditos</th>
                <th class="text-left">Docentes</th>
                <th class="text-left">Periodo</th>
                <th class="text-left">Capacidad</th>
                <th class="text-left">Estado</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="item in desserts" :key="item.codigo">
                <td>{{ item.nombre }}</td>
                <td>{{ item.codigo }}</td>
                <td>{{ item.descripcion }}</td>
                <td>{{ item.creditos }}</td>
                <td>{{ item.docente }}</td>
                <td>{{ item.periodo }}</td>
                <td>{{ item.capacidad }}</td>
                <td>{{ item.estado }}</td>
              </tr>
            </tbody>

          </v-table>

        </v-container>
      </v-main>

    </v-layout>
  </AuthenticatedLayout>
</template>