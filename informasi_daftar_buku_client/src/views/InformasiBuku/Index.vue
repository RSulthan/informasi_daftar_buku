<template>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-8">
        <router-link :to="{ name: 'informasi_buku.create'}"
        class="btn btn-primary btn-sm rounded shadow mb-3">Add</router-link>

        <div class="card rounded shadow">
          <div class="card-header">
            Daftar Buku
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Judul Buku</th>
                  <th>Isi Buku</th>
                  <th>Penulis</th>
                   <th>Sampul Depan</th>
                   <th>Jumlah Halaman</th>
                   <th>Waktu Buat</th>
                   <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(informasi_buku, index) in informasi_buku.data" :key="index">
                  <td>{{ informasi_buku.judul }}</td>
                  <td>{{ informasi_buku.isi }}</td>
                  <td>{{informasi_buku.id_penulis}}</td>
                  <td>{{informasi_buku.gambar}}</td>
                  <td>{{informasi_buku.halaman}}</td>
                  <td>{{informasi_buku.waktu_buat}}</td>
                  <td>
                    <div class="btn-group">
                      <router-link
                      :to="{name:'informasi_buku.edit', params:{id: informasi_buku.id}}"
                      class="btn btn-sm btn-outline-info">Edit</router-link>
                      <button class="btn btn-sm btn-outline-danger" @click.prevent="destroy(informasi_buku.id, index)">
                          Delete
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>


<script>
import axios from 'axios'
import {onMounted, ref} from 'vue'

export default {
  setup(){
    // reactive state
    let informasi_buku = ref([]);

    onMounted(()=> {
      // Ambil data dari api endpoint
      axios.get('http://127.0.0.1:8000/api/buku')
      .then((result) => {
        informasi_buku.value = result.data
      }).catch((err)=> {
        console.log(err.response)
      })
    })

    function destroy(id, index) {
        axios.delete(
        `http://127.0.0.1:8000/api/buku/${id}`
      )
      .then(() => {
          informasi_buku.value.data.splice(index, 1)
      }).catch((err) => {
          console.log(err.response.data);
      });
    }

    return {
      informasi_buku,
      destroy
    }

  }
};
</script>
