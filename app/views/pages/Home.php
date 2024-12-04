<?php require_once "../app/views/components/navbar.php" ; ?>

    <main id="page-content" class="m-0 p-0 w-screen overflow-hidden -mt-1">
        <div class="relative m-0 p-0 w-full">
            <div>
                <video autoplay muted loop class="w-full object-cover m-0 p-0" src="images/Welcome.mp4"
                    type="video/mp4"></video>
                <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="flex justify-center items-center min-h-screen bg-gray-100 py-20! !important">
                    <div class="container mx-auto bg-white p-16 !pt-24 !pb-24 max-w-6xl shadow-lg rounded-lg !my-16">
                        <div class="flex flex-col md:flex-row justify-between items-start gap-8">
                            <div class="w-full md:w-1/2 pr-0 md:pr-8">
                                <h1 class="text-6xl md:text-[24rem] font-bold text-emerald-700 leading-tight mb-8"
                                    style="font-size: 2.5rem; color: #047857; padding-top: 3rem; padding-bottom: 3rem; margin-top: 4rem; margin-bottom: 4rem;">
                                    Explore the Queens<br> watch collection
                                </h1>
                            </div>
                            <div class="w-full md:w-1/2 pl-0 md:pl-8">
                                <p class="text-black text-xl mb-6"
                                    style="padding-top: 3rem; margin-top: 4rem; margin-bottom:1rem">
                                    "You will discover Queens exudes elegance and luxury. Our timepieces are crafted
                                    with precious and attentions to detail, making them the perfect accessory for those
                                    who peripatetic sophisticated and style"
                                </p>
                                <p class="text-blackss text-xl" style="padding-bottom:4rem">
                                    Explore our collection and find the ideal watch that compliments your unique taste.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php foreach ($data as $item): ?>
            <div class="relative h-screen"
                style="background-image: url('<?=$item["image"]?>'); background-size: cover; background-position: center; height: 500px;">
                <div class="absolute top-1/4 left-16 text-black z-30" style="padding-top: 14rem; padding-left: 3rem;">
                    <h2 class="text-7xl font-bold mb-4" style="font-size: 3rem;"><?= $item["name"] ?></h2>
                    <p class="text-lg mb-4"><?= $item["titles"] ?></p>
                    <a href="product?id=<?= $item["id"] ?>" class="text-black font-bold py-2 px-4 rounded">Discover
                        More>></a>
                </div>
            </div>
        <?php endforeach; ?>
        



    </main>