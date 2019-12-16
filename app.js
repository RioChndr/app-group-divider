
var app = new Vue({
    el : "#app",
    data: {
        list_nama: "",
        jumlah_kelompok : null,
        tim :[]
    },
    created : function(){
        this.list_nama = "masukkan nama-nama orang, \ncontoh : \nangga \nanggi \nangge";
    },
    methods : {
        buat_tim: function(){
            if(this.jumlah_kelompok < 1){
                this.jumlah_kelompok = 1;
            }
            this.tim = [];
            var arr_nama = this.list_nama.split("\n");
            var i = 0;
            while(arr_nama.length > 0){
                if(i == this.jumlah_kelompok){
                    i = 0;
                }
                var i_random = Math.floor(Math.random() * arr_nama.length);
                if(this.tim[i] == null){
                    this.tim[i] = []
                }
                if(arr_nama[i_random] != ""){
                    this.tim[i].push(arr_nama[i_random]);
                }
                arr_nama.splice(i_random, 1);
                i++;
            }
            console.log(this.tim);
        },
        total_nama : function(){
            var list_namanya = this.list_nama.split("\n");
            var hitung = 0;
            for (let i = 0; i < list_namanya.length; i++) {
                const e = list_namanya[i];
                if(e != ""){
                    hitung++;
                }
            }
            return hitung;
        },
        add_team : function(){
            this.jumlah_kelompok++;
            this.buat_tim();
        },
        remove_team : function(){
            this.jumlah_kelompok--;
            this.buat_tim();
        }
    }
})