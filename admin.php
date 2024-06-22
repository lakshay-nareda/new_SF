<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>

    <?php

    include 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['category_name']) && !empty($_POST['category_name'])) {
            $categoryName = $_POST['category_name'];
            // Proceed with adding the category to the database or list
            echo "Category added: " . htmlspecialchars($categoryName);
        } else {
            echo "Category name is required.";
        }
    }

    if(isset($_POST["category_name"]) && !empty($_POST["category_name"])) {
    $add_Category = "INSERT INTO `add_category` VALUES 
    ('', '$categoryName');";

    if ($con->query($add_Category) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $add_Category . "<br>" . $con->error;
    }
}   
    ?>
    <section>
        <div class="container mx-auto">
            <div class="flex">
                <div class="w-1/4 py-10 px-5 bg-[#735DA5] h-screen overflow-y-auto">
                    <ul class="sf_a_tabs">
                        <li class="cursor-pointer py-3 px-5 border-2 rounded-xl text-xl text-white mb-5 duration-300 hover:bg-white hover:text-[#735DA5] hover:font-bold current" data-tab="tab_1">HOME SLIDER</li>
                        <li class="cursor-pointer py-3 px-5 border-2 rounded-xl text-xl text-white mb-5 duration-300 hover:bg-white hover:text-[#735DA5] hover:font-bold" data-tab="tab_2">CATEGORY VIDEO</li>
                        <li class="cursor-pointer py-3 px-5 border-2 rounded-xl text-xl text-white mb-5 duration-300 hover:bg-white hover:text-[#735DA5] hover:font-bold" data-tab="tab_3">STARS</li>
                        <li class="cursor-pointer py-3 px-5 border-2 rounded-xl text-xl text-white mb-5 duration-300 hover:bg-white hover:text-[#735DA5] hover:font-bold" data-tab="tab_4">Create Category</li>
                    </ul>
                </div>

                <div class="w-3/4 py-10 px-8">
                    <div id="tab_1" class="sf-tabs_c current">

                        <h3 class="text-xl text-[#735DA5] mb-3 font-bold">Add Home Slider Slide</h3>

                        <form class="grid grid-cols-3 gap-y-2.5 gap-x-5">
                            <input class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none font-semibold" type="text" placeholder="Title">

                            <input class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none cursor-pointer font-semibold" type="file">

                            <select class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none cursor-pointer font-semibold">
                                <option value="1">Select Category</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                            </select>
                            <button class="text-lg text-white border-2 border-[#735DA5] bg-[#735DA5] font-medium hover:font-bold rounded-lg py-2.5 px-5 duration-300 hover:text-[#735DA5] hover:bg-white focus:text-[#735DA5] focus:bg-white" type="submit">
                                Submit
                            </button>
                        </form>

                        <div class="mt-10">
                            <div class="flex items-center justify-between mb-5">
                                <h3 class="text-xl text-[#735DA5] font-bold">Home Slider Slides Privew</h3>
                                <div class="w-72">
                                    <input class="rounded-full border-[#735DA5] border-2 w-full py-2.5 px-5 duration-100 outline-none text-[#735DA5] text-lg font-semibold" type="text" placeholder="Search Title For Delete">
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full border-collapse border-[#735DA5] border-2">
                                    <thead>
                                        <tr>
                                            <th class="text-2xl w-2/5 font-medium text-white bg-[#735DA5] p-5" align="start">
                                                Title Name</th>
                                            <th class="text-2xl w-1/5 font-medium text-white bg-[#735DA5] p-5" align="start">
                                                Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="w-4/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold text-[#735DA5] text-lg">
                                                title name jhbsdh ns dhJSBDF SN DFH s name jhbsdh ns dhJSBDF SN DFH
                                                sdffj
                                            </td>
                                            <td class="w-1/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold">
                                                <a class="block text-lg border-2 duration-300 border-red-800 rounded-lg py-2.5 px-5 text-white bg-red-800 hover:text-red-800 hover:bg-white text-center" href="#">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="w-4/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold text-[#735DA5] text-lg">
                                                DFH s name jhbsdh ns dhJSBDF SN DFH
                                                sdffj
                                            </td>
                                            <td class="w-1/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold">
                                                <a class="block text-lg border-2 duration-300 border-red-800 rounded-lg py-2.5 px-5 text-white bg-red-800 hover:text-red-800 hover:bg-white text-center" href="#">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="tab_2" class="sf-tabs_c">
                        <h3 class="text-xl text-[#735DA5] mb-3 font-bold">Add Category Video</h3>

                        <form class="grid grid-cols-3 gap-y-2.5 gap-x-5">
                            <input class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none font-semibold" type="text" placeholder="Title">

                            <input class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none cursor-pointer font-semibold" type="file">

                            <select class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none cursor-pointer font-semibold">
                                <option value="1">Select Category</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                            </select>
                            <button class="text-lg text-white border-2 border-[#735DA5] bg-[#735DA5] font-medium hover:font-bold rounded-lg py-2.5 px-5 duration-300 hover:text-[#735DA5] hover:bg-white focus:text-[#735DA5] focus:bg-white" type="submit">
                                Submit
                            </button>
                        </form>

                        <div class="mt-10">
                            <div class="flex items-center justify-between mb-5">
                                <h3 class="text-xl text-[#735DA5] font-bold">All Category Videos Privew</h3>
                                <div class="w-72">
                                    <input class="rounded-full border-[#735DA5] border-2 w-full py-2.5 px-5 duration-100 outline-none text-[#735DA5] text-lg font-semibold" type="text" placeholder="Search Title For Delete">
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full border-collapse border-[#735DA5] border-2">
                                    <thead>
                                        <tr>
                                            <th class="text-2xl w-2/5 font-medium text-white bg-[#735DA5] p-5" align="start">
                                                Title Name</th>
                                            <th class="text-2xl w-1/5 font-medium text-white bg-[#735DA5] p-5" align="start">
                                                Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="w-4/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold text-[#735DA5] text-lg">
                                                title name jhbsdh ns d jhbsdh ns dhJSBDF SN DFH
                                                sdffj
                                            </td>
                                            <td class="w-1/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold">
                                                <a class="block text-lg border-2 duration-300 border-red-800 rounded-lg py-2.5 px-5 text-white bg-red-800 hover:text-red-800 hover:bg-white text-center" href="#">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="w-4/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold text-[#735DA5] text-lg">
                                                DFH s name jh s dhJSBDF SN DFH
                                                sdffj
                                            </td>
                                            <td class="w-1/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold">
                                                <a class="block text-lg border-2 duration-300 border-red-800 rounded-lg py-2.5 px-5 text-white bg-red-800 hover:text-red-800 hover:bg-white text-center" href="#">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="tab_3" class="sf-tabs_c">
                        <h3 class="text-xl text-[#735DA5] mb-3 font-bold">Add Star</h3>

                        <form class="grid grid-cols-3 gap-y-2.5 gap-x-5">
                            <input class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none font-semibold" type="text" placeholder="Title">

                            <input class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none cursor-pointer font-semibold" type="file">

                            <select class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none cursor-pointer font-semibold">
                                <option value="1">Select Category</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                                <option value="1">Category Name</option>
                            </select>
                            <button class="text-lg text-white border-2 border-[#735DA5] bg-[#735DA5] font-medium hover:font-bold rounded-lg py-2.5 px-5 duration-300 hover:text-[#735DA5] hover:bg-white focus:text-[#735DA5] focus:bg-white" type="submit">
                                Submit
                            </button>
                        </form>

                        <div class="mt-10">
                            <div class="flex items-center justify-between mb-5">
                                <h3 class="text-xl text-[#735DA5] font-bold">All Stars Privew</h3>
                                <div class="w-72">
                                    <input class="rounded-full border-[#735DA5] border-2 w-full py-2.5 px-5 duration-100 outline-none text-[#735DA5] text-lg font-semibold" type="text" placeholder="Search Title For Delete">
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full border-collapse border-[#735DA5] border-2">
                                    <thead>
                                        <tr>
                                            <th class="text-2xl w-2/5 font-medium text-white bg-[#735DA5] p-5" align="start">
                                                Title Name</th>
                                            <th class="text-2xl w-1/5 font-medium text-white bg-[#735DA5] p-5" align="start">
                                                Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="w-4/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold text-[#735DA5] text-lg">
                                                title name jhb jhbsdh ns dhJSBDF SN DFH
                                                sdffj
                                            </td>
                                            <td class="w-1/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold">
                                                <a class="block text-lg border-2 duration-300 border-red-800 rounded-lg py-2.5 px-5 text-white bg-red-800 hover:text-red-800 hover:bg-white text-center" href="#">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="w-4/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold text-[#735DA5] text-lg">
                                                DFH s na s dhJSBDF SN DFH
                                                sdffj
                                            </td>
                                            <td class="w-1/5 align-top p-5 border-[#735DA5] border-2 text-lg font-bold">
                                                <a class="block text-lg border-2 duration-300 border-red-800 rounded-lg py-2.5 px-5 text-white bg-red-800 hover:text-red-800 hover:bg-white text-center" href="#">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="tab_4" class="sf-tabs_c">
                        <h3 class="text-xl text-[#735DA5] mb-3 font-bold">Create New Category</h3>

                        <form id='addCategoryForm' class="grid grid-cols-3 gap-y-2.5 gap-x-5" method="post">
                            <input class="border-2 border-[#735DA5] text-lg text-[#735DA5] p-2 rounded-lg outline-none font-semibold" name="category_name" type="text" placeholder="Category Name">
                            <button class="text-lg text-white border-2 border-[#735DA5] bg-[#735DA5] font-medium hover:font-bold rounded-lg py-2.5 px-5 duration-300 hover:text-[#735DA5] hover:bg-white focus:text-[#735DA5] focus:bg-white" type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/sf.js"></script>
</body>


<script>
    $('#addCategoryForm')[0].reset();
    
</script>

</html>