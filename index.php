<?php require_once "thema/header.php";?>
<?php require_once "classes/meyveler.php";?>


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h5 class="card-title text-center bg-danger p-3 text-white fw-bold fs-2">OOP Programming</h5>
            .<div class="card">
                <div class="card-body">
                    <?php
                    
                        $cilek = new Meyveler("Çilek" ,"Kırmızı");
                        $elma = new Meyveler("Elma" ,"Yeşil");

                        $cilek->setName("Dağ Çileği"); 
                        $cilek->setColor("Kıpkırmızı");

                        $elma->setName("Dağ Elması");
                        $elma->setColor("Koyu Kırmızı");

                        echo $cilek->getName();
                        echo "-";
                        echo $cilek->getColor();

                        echo "<br>";

                        echo $elma->getName();
                        echo "-";
                        echo $elma->getColor();

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "thema/footer.php";?>