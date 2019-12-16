<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi bagi kelompok</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app" class='container'>
        <div class="mt-3 text-center">
            <h1>Aplikasi Bagi kelompok</h1> <br>
            <div class="text-info">
                Anda kesulitan membagi kelompok ? simple !! cukup masukkan nama-nama tim anda, lalu masukkan jumlah kelompoknya, dan BOOM !! <br>

            </div>
        </div>
        <div class="form card p-3 mt-3">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="lis_nama">Masukkan daftar nama</label>
                    <textarea name="list_nama" id="lis_nama" cols="30" rows="10" v-model='list_nama' class='form-control'>
                    </textarea>
                    Total nama : {{total_nama()}}
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jumlah Kelompok</label>
                        <input type="text" placeholder="Jumlah kelompok" v-model='jumlah_kelompok' class='form-control'>
                    </div>
                    
                    <button @click='buat_tim()' class='btn btn-primary w-100'>Buat Tim</button>
                </div>

            </div>
        </div>
        <br>
        <div v-if='tim.length > 0' class='row mt-3'>
            <template v-for='(orangnya, kelompok) in tim'>
                <div class="col-md-4 mb-3">
                    <div class="card tim">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    Kelompok : {{kelompok + 1}} <br>
                                </div>
                                <div class="col text-right" v-if='kelompok == tim.length -1'>
                                    <button class="btn btn-danger  btn-sm" class='Kurangi jumlah tim' @click='remove_team()'>X</button>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            
                            <ul class='list-group'>
                                <li v-for='orang in orangnya' class='list-group-item'>{{orang}}</li>
                            </ul>
    
                        </div>
    
                    </div>
                </div>
                
            </template>
            <div class="col-md-4 mb-3">
                <div class="btn_add_item">
                    <button class='add_team' title="Tambah team" @click='add_team()'>+</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="vuejs/vue.min.js"></script>
<script src="app.js"></script>
</html>