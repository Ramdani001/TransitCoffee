// var main_url = <?php echo $main_url ?>;
var pages = {
    'Product1': '<img src="assets/gambar/Hero/robusta.png" width="500" alt="a" class="mx-auto" alt="Robusta Coffee">',
    'Product2': '<img src="assets/gambar/Hero/vietnamDrip.png" width="500" alt="a" class="mx-auto" alt="Vietnam Drip Coffee">',
    'Product3': '<img src="assets/gambar/Hero/arabica.png" width="500" alt="a" class="mx-auto" alt="Arabica Coffee">'
};

function SinglePages(page) {
    
    var ContentPages;

    switch (page) {
        case 'Product1':
            ContentPages = pages.Product1;
            document.getElementById('1').classList.add('aktif')
            document.getElementById('2').classList.remove('aktif')
            document.getElementById('3').classList.remove('aktif')
            break;
        case 'Product2':
            ContentPages = pages.Product2;
            document.getElementById('2').classList.add('aktif')
            document.getElementById('1').classList.remove('aktif')
            document.getElementById('3').classList.remove('aktif')
             break;
        case 'Product3':
             ContentPages = pages.Product3;
                document.getElementById('3').classList.add('aktif')
                document.getElementById('2').classList.remove('aktif')
                document.getElementById('1').classList.remove('aktif')   
             break;
        default:
             ContentPages = pages.Product1;
            document.getElementById('1').classList.add('aktif')
            document.getElementById('2').classList.remove('aktif')
            document.getElementById('3').classList.remove('aktif')
             break;
    }
    document.getElementById("Content").innerHTML = ContentPages;
}

  AOS.init();

// setInterval(function() {
//     SinglePages('Product2')
//     document.getElementById('2').classList.add('aktif')
//     document.getElementById('1').classList.remove('aktif')
//     document.getElementById('3').classList.remove('aktif')
// }, 5000);

// setInterval(function() {
//     SinglePages('Product3')
//     document.getElementById('3').classList.add('aktif')
//     document.getElementById('2').classList.remove('aktif')
//     document.getElementById('1').classList.remove('aktif')
// }, 10000);

// setInterval(function() {
//     SinglePages('Product1')
//     document.getElementById('1').classList.add('aktif')
//     document.getElementById('2').classList.remove('aktif')
//     document.getElementById('3').classList.remove('aktif')
// }, 15000);


