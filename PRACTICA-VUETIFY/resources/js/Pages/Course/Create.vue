<template>
  <AuthenticatedLayout>
    <v-container>
      <v-card>
        <v-card-title>Crear Curso</v-card-title>

        <v-card-text>
          <v-form @submit.prevent="submit">
            
            <v-row dense>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="nombre"
                  label="Nombre"
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="6">
                <v-text-field
                  v-model="codigo"
                  label="Código"
                ></v-text-field>
              </v-col>

              <v-col cols="12">
                <v-text-field
                  v-model="descripcion"
                  label="Descripción"
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="4">
                <v-text-field
                  v-model="creditos"
                  label="Créditos"
                  type="number"
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="4">
                <v-select
                  v-model="docente"
                  :items="docentes"
                  item-title="nombre"
                  item-value="id"
                  label="Docente"
                ></v-select>
              </v-col>

              <v-col cols="12" md="4">
                <v-select
                  v-model="periodo"
                  :items="periodos"
                  item-title="nombre"
                  item-value="id"
                  label="Periodo"
                ></v-select>
              </v-col>

              <v-col cols="12" md="6">
                <v-text-field
                  v-model="capacidad"
                  label="Capacidad"
                  type="number"
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="6">
                <v-select
                  v-model="estado"
                  :items="estados"
                  label="Estado"
                ></v-select>
              </v-col>

            </v-row>

            <v-btn
              type="submit"
              color="primary"
              class="mt-4"
            >
              Guardar
            </v-btn>

          </v-form>
        </v-card-text>
      </v-card>
    </v-container>
  </AuthenticatedLayout>
</template>

<script setup>
import { ref } from 'vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const nombre = ref('')
const codigo = ref('')
const descripcion = ref('')
const creditos = ref('')
const docente = ref(null)
const periodo = ref(null)
const capacidad = ref('')
const estado = ref(null)

const estados = ['Activo', 'Inactivo']

const docentes = ref([
  { id: 1, nombre: 'Juan Perez' },
  { id: 2, nombre: 'Maria Lopez' },
  { id: 3, nombre: 'Carlos Diaz' },
])

const periodos = ref([
  { id: 1, nombre: '2026-1' },
  { id: 2, nombre: '2026-2' }
])

const submit = () => {
  const data = {
    nombre: nombre.value,
    codigo: codigo.value,
    descripcion: descripcion.value,
    creditos: creditos.value,
    docente: docente.value,
    periodo: periodo.value,
    capacidad: capacidad.value,
    estado: estado.value
  }

  console.log(data)
}
</script>