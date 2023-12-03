const selectElement = document.getElementById('roleSelect');

selectElement.addEventListener('change', function() {
    if (this.value === '') {
        this.setCustomValidity('Please select a role.');
    } else {
        this.setCustomValidity('');
    }
});

$(document).ready(function() {
    $('#roleSelect').change(function() {
        if ($(this).val() === '') {
            $(this).addClass('invalid');
        } else {
            $(this).removeClass('invalid');
        }
    });
});

$(document).ready(function(){
    // Cek apakah ada nilai submenu yang tersimpan di local storage
    var activeSubmenu = localStorage.getItem("activeSubmenu");
    
    // Jika ada nilai submenu yang tersimpan, atur submenu tersebut menjadi aktif
    if(activeSubmenu){
        $(".nav-link").removeClass("active");
        $('a[href="Kelas 10' + activeSubmenu + '"]').addClass("active");
    }

    // Event saat submenu di-klik
    $(".nav-link").on("click", function(){
        // Menghapus kelas active dari semua submenu
        $(".nav-link").removeClass("active");
        
        // Menambahkan kelas active ke submenu yang di-klik
        $(this).addClass("active");
        
        // Simpan nilai submenu yang aktif ke dalam local storage
        var activeSubmenu = $(this).attr("href");
        localStorage.setItem("activeSubmenu", activeSubmenu);

        // Mengatur href untuk submenu "Kelas 10"
        if ($(this).hasClass("nav-link") && $(this).hasClass("active")) {
            // Cek apakah submenu yang aktif adalah "Kelas 10"
            if ($(this).text().trim() === "Kelas 10") {
                // Mengatur href untuk submenu "Kelas 10"
                $(this).attr("href", "kelas10");
            }
        }
    });
});