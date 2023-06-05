<?php 
include_once __DIR__ . '../../../database/db.php';

?>

<main class="d-flex justify-content-between align-items-start flex-wrap p-5 ">
    <!-- <div class="card1"> -->
        <?php foreach ($arrayProducts as $el) {?>
            
            <!-- <p> -->
                <!-- <?php 
    
                    if($el -> getClassName()=== 'Food'){
                        echo "Food";
                    }elseif($el -> getClassName()=== 'Game'){
                        echo "Game";
                    }elseif($el -> getClassName()=== 'Accessory'){
                        echo "Accessory";
                    }
                
                ?> -->
            <!-- </p> -->
    
            <!-- card -->
            <div class="card mb-3 p-3">
                <img class="productImg" src="<?php echo $el ->image ?>" class="card-img-top" alt="...">
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
                    <span class="d-block text-decoration-underline">Descrizione:</span>
                    <p class="card-text">
                        <?php echo $el ->Description ?>
                    </p>
                </div>
            </div>
        
        <?php } ?>

    <!-- </div> -->

    

        
    

</main>