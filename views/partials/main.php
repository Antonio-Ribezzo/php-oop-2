<?php 
    include_once __DIR__ . '../../../database/db.php';
?>

<main class="d-flex justify-content-between align-items-start flex-wrap p-5 ">
    <!-- <div class="card1"> -->
        <?php foreach ($arrayProducts as $el) {?>
            <!-- card -->
            <div class="card mb-4 p-3 position-relative">
                <!-- icon -->
                <div class="position-absolute">
                    <i class="<?php echo $el->category->icon?>"></i>
                </div>
                <img class="productImg align-self-center" src="<?php echo $el ->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2><?php echo $el ->name ?></h2>
                    <span>Category: 
                        <strong>
                            <?php 
                                if($el -> getClassName() === 'Food'){
                                echo $el->type_of_product->name;
                                }elseif($el -> getClassName() === 'Game'){
                                echo $el->type_of_product->name;
                                }elseif($el -> getClassName() === 'Accessory'){
                                echo $el->type_of_product->name;
                                }
                            ?>
                        </strong>
                    </span>
                    <span class="d-block">Price: 
                            <?php 
                            echo "<strong> $el->price &euro;</strong>";
                            ?>
                    </span>
                    <?php 
                        if($el->getClassName() === 'Food' or $el->getClassName() === 'Accessory'){
                            echo "<span class='d-block'>Size: 
                            <strong> $el->petSize </strong>
                            </span>";
                        }else{
                            echo "<span class='d-block'>For any size of pet
                            </span>";
                        }
                    ?>
                    <span class="d-block text-decoration-underline">Descrizione:</span>
                    <p class="card-text">
                        <?php echo $el ->Description ?>
                    </p>
                </div>
            </div>
        
        <?php } ?>

    <!-- </div> -->

    

        
    

</main>