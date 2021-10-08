<template>
 <div>
   <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-8">
        <router-link :to="{ name: 'informasi_buku.index'}"
        class="btn btn-primary btn-sm rounded shadow mb-3">Back</router-link>

        <div class="card rounded shadow">
          <div class="card-header">
            Create Informasi Buku
          </div>
          <div class="card-body">
            <form @submit.prevent="store()">
              <div class="mb-3">
                <label for="" class="form-label">Judul</label>
                <input type="text" class="form-control" v-model="informasi_buku.judul">
                <div v-if="validation.judul" class="text-danger">
                  {{validation.judul[0]}}
                </div>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Isi</label>
                <input type="text" class="form-control" v-model="informasi_buku.isi">
                <div v-if="validation.isi" class="text-danger">
                  {{validation.isi[0]}}
                </div>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Penulis</label>
                <select name="" id="" class="form-select" v-model="informasi_buku.id_penulis">
                  <option value="1">Sulthan Rafif</option>
                  <option value="2">Andra Akmal Maulidani</option>
                  <option value="3">Mellano Trias Mahendra</option>
                  <option value="4">Asep Bensin</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Jumlah Halaman</label>
                <input type="text" class="form-control" v-model="informasi_buku.halaman">
                <div v-if="validation.halaman" class="text-danger">
                  {{validation.halaman[0]}}
                </div>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Gambar</label>
                <input type="text" class="form-control" v-model="informasi_buku.gambar">
                <div v-if="validation.gambar" class="text-danger">
                  {{validation.gambar[0]}}
                </div>
              </div>
              <button class="btn btn-outline-primary">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
import {reactive, ref} from 'vue'
import { useRouter } from 'vue-router'
import axios from 'axios'
export default {
  setup(){
    // data binding
    const informasi_buku = reactive({
      judul: '',
      isi: '',
      penulis: 1,
      halaman: 0,
      gambar: '',
      tanggal_buat: ''
    });

    const validation = ref([]);

    const router = useRouter();

    function store() {
      axios.post(
        'http://127.0.0.1:8000/api/buku',
        informasi_buku
      )
      .then(() => {
          router.push({
            name: 'informasi_buku.index'
          });
      }).catch((err) => {
          validation.value = err.response.data
      });
    }
    return {
      informasi_buku,
      validation,
      router,
      store
    }
  }
};
</script>