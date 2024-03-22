<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert( "Kamu Hanya Bisa Memasukkan Data Berupa Angka!" )
            return false;
        }
        return true;
    }
</script>
