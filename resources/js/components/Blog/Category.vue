<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Daftar Pesanan</h3></div>

                    <div class="card-body">

                        <!-- <button type="button" class="btn btn-success float-right" @click="modalBaru">
                            <i class="fas fa-folder-plus"></i> &nbsp; Tambah Kategori</button> -->

        
                        <table class="table table-bordered">
                            
                            <tr>
                                <th><center>Nama Pelanggan</center></th>
                                <th><center>Topping</center></th>
                                <th><center>Harga</center></th>
                                <th style="width:15%"><center>Quantity</center></th>
                                <th><center>Total</center></th>
                                <th style="width:15%"><center>Aksi</center></th>
                            </tr>


                            <tr v-for="items in kategoris" :key="items.id">
                                <td> 
                                    {{items.nama_pel}}
                                </td>

                                <td>
                                    {{items.nama_topp}}
                                </td>

                                <td>
                                    {{items.harga}}
                                </td>

                                <td>
                                    {{items.quantity}}
                                </td>

                                <td>
                                    {{items.total}}
                                </td>

                                <td>
                                <center>
                                
                                <a href="#" @click="editData(items)" title="Edit Data">
                                    <i class="fas fa-edit cyan"> </i>
                                </a>
                                &nbsp;&nbsp; | &nbsp;&nbsp;
                                <a href="#" @click="deleteData(items.id)" title="Hapus Data">
                                    <i class="fas fa-trash red"> </i>
                                </a>
                                </center>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                       
    </div>
</template>

<script>
    export default {
        data() {
            return {
                editmode: false,
                kategoris: {},
                form: new Form({            //menyimpan data yang diinputkan
                    id: "",
                    nama_pel: "",
                    nama_topp: "",
                    harga: "",
                    quantity: "",
                    total: ""
                })
            };
        },

        methods: {                          //method untuk 
            modalBaru() {
                this.editmode = false;
                this.form.reset();
                $("#tambah").modal("show");
            },
            editData(items) {
                this.editmode = true;
                this.form.reset();
                $("#tambah").modal("show");
                this.form.fill(items);
            },
            loadData() {
                axios.get("api/kategori").then(({data}) => (this.kategoris = data));
            },
            createData() {
            this.form
                .post("api/kategori")
                .then(() => {
                this.$Progress.start();
                Fire.$emit("refreshData");      //refresh database kedalam tabel
                $("#tambah").modal("hide");
                Toast.fire({                    //notifikasi 
                    type: "success",
                    title: "Data Berhasi Tersimpan"
                });
                this.$Progress.finish();
                })
                .catch();
            },
            updateData() {
                this.form
                .put("api/kategori/" + this.form.id)
                .then(() => {
                    this.$Progress.start();
                    $("#tambah").modal("hide");
                    Toast.fire({
                        type: "success",
                        title: "Data Berhasil Diubah"
                    });
                    this.$Progress.finish();
                    Fire.$emit("refreshData");
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            deleteData(id) {
                Swal.fire({
                    title: "Anda Yakin Ingin Menghapus Data Ini?",
                    text: "Kilit Batal Untuk Membatalkan Penghapusan",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus"
                }).then(result => {
                    if (result.value) {
                        this.form
                        .delete("api/kategori/" + id)
                        .then(() => {
                            Swal.fire("Terhapus", "Data Anda Sudah Terhapus", "success");
                            Fire.$emit("refreshData");
                        })

                        .catch(() => {
                            Swal.fire("Gagal", "Data Gagal Terhapus", "warning");
                        });
                    }
                });
            }
        },
            created() {                     //untuk menampilkan / memanggil data di method atas
                this.loadData();
                Fire.$on("refreshData", () => {
                    this.loadData();
                });
            }
    };
</script>
