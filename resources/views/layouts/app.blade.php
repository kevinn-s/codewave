<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/accountinfo.css')
    @vite('resources/js/accountinfo.js')
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>

<body>
    <div>
        <!-- header pake master -->

        <div class="grid grid-cols-2 p-20">
            <!-- first card -->
            <div class="">
                <div>
                    <div class="font-poppins font-medium text-gray-400 mb-4 ml-2 " >General</div>
                </div>
                <div>

                    <div class="mb-2 w-72 rounded-lg gap-x-2 h-9 flex flex-row text-m items-center text-gray-600 hover:bg-gray-200 hover:ease-in duration-300 hover:text-slate-800 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 pl-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    
                    <button class="font-poppins font-medium  " onclick="setVisible(0)">Account Details</s>
                    
                    </div>

                    <div class="w-72 rounded-lg gap-x-2 h-9 flex flex-row text-m items-center text-gray-600 hover:bg-gray-200 hover:ease-in duration-300 hover:text-slate-800 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 pl-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
</svg>

                    <button class="font-poppins font-medium" onclick="setVisible(1)" >Subscriptions</s>
                    </div>

                    <div></div>

                </div>
            </div>

        <main>
            @yield('content')
        </main>
        </div>
    </div>
</body>

<script>
    

const infoCards = [];

document.getElementById("menu-cards").childNodes.forEach((cards) => {
    // excluded commentaries
    if(cards.hasChildNodes() ){
        cards.hidden = true;
        infoCards.push(cards)

    }
})

const setVisible = (index) => {
    /*
    ini buat tampilin card sesuai sama button yang di click
    setiap mau ngeklik pindah card , set semua cards jadi invisible, kecuai card yang sesuai sama button
    yang di klik
    */
    infoCards.map((cards, indexInfoCards) => {
        indexInfoCards === index ? cards.hidden = false : cards.hidden = true
    })
}

infoCards[0].hidden = false;

</script>

</html>