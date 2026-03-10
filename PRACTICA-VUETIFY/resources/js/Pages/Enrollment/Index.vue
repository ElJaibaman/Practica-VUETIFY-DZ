<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'


const enrollments = ref([
  { id: 1, enrollment_date: '1974-09-30', status: 'retirado', final_average: 91.62, student_id: 1, course_id: 5 },
  { id: 2, enrollment_date: '2005-04-26', status: 'retirado', final_average: 92.46, student_id: 1, course_id: 8 },
  { id: 3, enrollment_date: '1983-04-02', status: 'inscrito', final_average: 67.97, student_id: 1, course_id: 26 },
  { id: 4, enrollment_date: '2001-11-09', status: 'finalizado', final_average: 96.37, student_id: 2, course_id: 2 },
  { id: 5, enrollment_date: '2006-06-01', status: 'inscrito', final_average: 88.09, student_id: 2, course_id: 3 },
  { id: 6, enrollment_date: '2010-03-15', status: 'finalizado', final_average: 75.20, student_id: 3, course_id: 10 },
  { id: 7, enrollment_date: '2012-08-20', status: 'inscrito', final_average: 82.45, student_id: 4, course_id: 12 },
  { id: 8, enrollment_date: '2015-02-10', status: 'retirado', final_average: 60.00, student_id: 5, course_id: 1 },
  { id: 9, enrollment_date: '2018-05-22', status: 'finalizado', final_average: 94.12, student_id: 6, course_id: 15 },
  { id: 10, enrollment_date: '2020-01-12', status: 'inscrito', final_average: 89.30, student_id: 7, course_id: 22 }
])
</script>

<template>
  <AuthenticatedLayout>
    <v-layout>
      
      <v-navigation-drawer expand-on-hover permanent rail>
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
            <v-list-item prepend-icon="mdi-account-tie" title="Matrícula"></v-list-item>
          </Link>
          <v-list-item prepend-icon="mdi-book" title="Cursos"></v-list-item>
        </v-list>
      </v-navigation-drawer>

      <v-main>
        <v-container>

          <v-btn color="cyan" class="mb-4">
            <Link :href="route('enrollments.create')" class="text-black">
              Crear Matrícula
            </Link>
          </v-btn>

          <v-table striped="even">
            <thead>
              <tr>
                <th class="text-left">ID</th>
                <th class="text-left">Fecha Matriculación</th>
                <th class="text-left">Estado</th>
                <th class="text-left">Promedio Final</th>
                <th class="text-left">ID Estudiante</th>
                <th class="text-left">ID Curso</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="item in enrollments" :key="item.id">
                <td>{{ item.id }}</td>
                <td>{{ item.enrollment_date }}</td>
                <td>{{ item.status }}</td>
                <td>{{ item.final_average }}</td>
                <td>{{ item.student_id }}</td>
                <td>{{ item.course_id }}</td>
              </tr>
            </tbody>
          </v-table>

        </v-container>
      </v-main>

    </v-layout>
  </AuthenticatedLayout>
</template>