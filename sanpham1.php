<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./sanpham.css" />
    <link rel="stylesheet" href="./homepage_style.css">
    <link rel="stylesheet" href="./header_style.css">
    <link rel="stylesheet" href="./footer_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include './include/header.php' ?>

    <div class="container py-4 flex items-center gap-3">
        <a href="index.html" class="text-purple-600 text-base">
            <i class="fa fa-home"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa fa-chevron-right"></i>
        </span>
        <a href="sanpham.html" class="text-purple-600 text-base">
            <p class="text-gray-600 font-medium">
                Sản Phẩm
            </p>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">
            Áo SpyXfamilia
        </p>
        <br>

    </div>
    <div class="container grid grid-cols-2 gap-6  ">
        <div>
            <img class="" src="anh1.PNG" width="616px" height="600px">
            <div class="col-md-6 gird grid-cols-5 gap-4 mt-4 flex">
                <img src="anh1.PNG" class="  cursor-pointer border border-primary" width="136" height="136">
                <img src="anh.jpg" class="  cursor-pointer border " width="136" height="136">
                <img src="anh1.PNG" class="  cursor-pointer border " width="136" height="136">
                <img src="anh1.PNG" class="  cursor-pointer border " width="136" height="136">
            </div>
        </div>
        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">Iphone 11</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                </div>
                <div class="text-xs text-gray-500 ml-3">(100 Reviews)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Trạng Thái:</span>
                    <span class="text-green-600 "> Còn Hàng</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold "> Brand:</span>
                    <span class="text-green-600 "> Apple</span>
                </p>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold "> Category:</span>
                    <span class="text-green-600 "> phone</span>
                </p>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold "> Số Hiệu</span>
                    <span class="text-green-600 "> AK41231</span>
                </p>
                </p>
            </div>
            <div class=" flex items-baseline mb-1 space-x-2 font-bold mt-4">
                <p class="text-2xl text-red-400 font-semibold">$100</p>
                <p class="text-base text-gray-400 line-through">$50</p>

            </div>
            <p class="mt-4 text-gray-600">ăofkawokfowakefowakeofkwaoefkoawkefoawkeofkawoef</p>
            <div class="pt-4">
                <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Size</h3>
                <div class="flex items-baseline mt-2 mb-3 pb-3  border-slate-200">
                    <div class="space-x-2 flex text-sm font-bold">
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="xs" checked />
                            <div
                                class="w-9 h-9 rounded-full flex items-center justify-center text-violet-400 peer-checked:bg-violet-600 peer-checked:text-white">
                                XS
                            </div>
                        </label>
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="s" />
                            <div
                                class="w-9 h-9 rounded-full flex items-center justify-center text-violet-400 peer-checked:bg-violet-600 peer-checked:text-white">
                                S
                            </div>
                        </label>
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="m" />
                            <div
                                class="w-9 h-9 rounded-full flex items-center justify-center text-violet-400 peer-checked:bg-violet-600 peer-checked:text-white">
                                M
                            </div>
                        </label>
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="l" />
                            <div
                                class="w-9 h-9 rounded-full flex items-center justify-center text-violet-400 peer-checked:bg-violet-600 peer-checked:text-white">
                                L
                            </div>
                        </label>
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="xl" />
                            <div
                                class="w-9 h-9 rounded-full flex items-center justify-center text-violet-400 peer-checked:bg-violet-600 peer-checked:text-white">
                                XL
                            </div>
                        </label>
                    </div>
                </div>

            </div>
            <div class="pt-4">
                <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">color</h3>
                <div class="flex items-center gap-2">
                    <div class="color-selector">
                        <input type="radio" name="color" class="hidden" id="color-red">
                        <label for="color-red"
                            class="border border-gray-200 rounded-circle h-5 w-5 cursor-pointer shadow-sm block"
                            style="background-color: red;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" class="hidden" id="color-red">
                        <label for="color-red"
                            class="border border-gray-200 rounded-circle h-5 w-5 cursor-pointer shadow-sm block"
                            style="background-color: blue;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" class="hidden" id="color-red">
                        <label for="color-red"
                            class="border border-gray-200 rounded-circle h-5 w-5 cursor-pointer shadow-sm block"
                            style="background-color: black;"></label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h3 class=" text-sm text-gray-800 uppercase mb-1">Số lượng:</h3>
                <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-200 w-20">
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer user-select-none">-</div>
                    <div class="h-8 w-8 text-base flex items-center justify-center">1</div>
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer user-select-none">+</div>
                </div>
            </div>
            <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
                <a href="#" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition" >
                    <i class="fa fa-shopping-bag"></i> ADD TO CART
                </a>
                <a href="#" class="border border-gray-300 text-gray-600  px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-primary transition" >
                    <i class="fa fa-heart"></i> ADD TO CART
                </a>
            </div>
            <div class="flex gap-3 mt-4">
                <a href="#" class="text-gray-400 hover: text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center" >
                    <i class=" fa fa-facebook-f"></i> 
                </a>
                <a href="#" class="text-gray-400 hover: text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center" >
                    <i class=" fa fa-twitter"></i> 
                </a>
                <a href="#" class="text-gray-400 hover: text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center" >
                    <i class=" fa fa-instagram"></i> 
                </a>
            </div>
        </div>
       
        <div class="container pb-16">
            <h3 class="border-b border-gray-200 font-bold text-gray-800 pb-3 font-medium">Poducnt details</h3>
            <div class="w-3\.5 pt-6">
                <div class="text-gray-600 space-y-3">
                    <p>asdasdasd</p>
                    <p>asdasdasd</p>
                    <p>asdasdasd</p>
                </div>
                <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium"> Color</th>
                        <th class="py-2 px-4 border border-gray-300 ">Black, Red, Brown</th>
                    </tr>
                </table> 
            </div>  
        </div>
       
    </div>
    <div class="container pb-16">
        <h3 class="text-2xl font-medium text-gray-800 uppercase mb-6">Readlter product</h3>
    </div>

    <?php  include './include/footer.php' ?>



    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>