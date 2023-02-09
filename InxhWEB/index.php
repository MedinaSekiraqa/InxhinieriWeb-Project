<style>
    <?php include "css/style.css"?>
</style>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>Herline</title>
</head>
<body>

    <?php include '../inxhweb/include/header.php' ?>

    <div class="fillimi">
    <div class="col2">
          <h1>Give yourself new clothes!</h1>
         <p class="paragraph">LIFE IS SHORT <br>Make every outfit count</p>
         <a href="product.php" class="btn">Explore Now &#8594;</a>
        </div>
    <div class="pic">
        <img src="img/pink.jpg" width=300px>
 </div>
   </div>




   <h2 class="title">Latest Products</h2>
                  <div class="col-4">
                    <div class="prd1">
                        <img src="img/pic5.jpg" height="260px">
                        <h4>Pink Polka Dot Dress</h4>
                        
                    </div>
                    <div class="prd1">
                        <img src="img/pic6.jpg" height="260px">
                        <h4>V-neck Mini Dress</h4>
                        
                   </div>
                   <div class="prd1">
                        <img src="img/pic7.jpg" height="260px">
                         <h4>Bottom Ruffle Dress</h4>
                       
                  </div>
                   <div class="prd1"> 
                       <img src="img/pic8.jpg" height="260px">
                        <h4>Shirt Dress</h4>
                        
                </div>
            </div>
            </div>
            <div class="col-5">
                <div class="prd1">
                     <img src="img/heels1.jpg" height="260px" width="180">
                     <h4>Hot Pink Block Sandals</h4>
                    
                </div>
               <div class="prd1">
                    <img src="img/heels2.jpg" height="260px" width="180">
                    <h4>Block Heeled Sandals</h4>
                   
               </div>
              <div class="prd1">
                    <img src="img/heels3.jpg" height="260px" width="180">
                    <h4>Baby Pink Lace Up Stiletto</h4>
                   
              </div>
               <div class="prd1"> 
                   <img src="img/heels4.jpg" height="260px"width="200">
                   <h4>Pink Lace Up Square Toe Heels</h4>
               
            </div>
            </div>
        </div>
        </div>


   <!---SLIDER ---------------------------------------->

 
            
                <div class="fillimi"> 
            
                    <div class="slider">
            <div class="slide active">
                <img src="img/pink1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/pink2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/pink3.jpg" alt="">
            </div>
            <div class="buttons">
                <button id=""><</button>
                <button id="nextImgBtn">></button>
            </div>
        </div>
                    <div class="col2">
                        
                        <h1>New Collection</h1>
                        <small >
                           The latest Fashion collections<br>
                            You can't buy Happiness but you can buy those clothes and that's kind of the same thing.
                            </small><br><br>
                            <a href="product.php" class="btn">Buy Now &#8594;</a>
                        </div>
                </div>
           
       
    
     <script>
            var slides = document.querySelectorAll(".slide");
            var nextImgBtn = document.getElementById("nextImgBtn");
       
            var changeImg = (index) => {
                 slides.forEach(img =>{
                     img.classList.remove("active");
                 })
                slides[index].classList.add("active");
            }
    
            var index=0;
            nextImgBtn.addEventListener("click", function(){
    
                if(index<slides.length-1){
                    index++;
                    changeImg(index);
                    
                }else{
                    index=0;
                    changeImg(index);
                }
    
    
            })
    
           setInterval(() => {
            if(index<slides.length-1){
                    index++;
                    changeImg(index);
                    
                }else{
                    index=0;
                    changeImg(index);
                }
           }, 3000);
        </script>

        <!-------------------------------------->    
        <div class="testinomial">
              <div class="permbajtja">
                  <div class="fillimi">
                      <div class="pic3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem, ipsum dolor sit amet consectetur 
                          adipisicing elit.Sint nostrum consequuntur nihil ducimus nam
                           corporis nemo possimus harum cumque fuga quod</p> 
                         <img src="img/user-1.png"width=150px>
                        <h3>Sean Parker</h3>
                 </div> 
                 <div class="pic3">
                         <i class="fa fa-quote-left"></i>
                         <p>Lorem, ipsum dolor sit amet consectetur 
                         adipisicing elit.Sint nostrum consequuntur nihil ducimus nam
                         corporis nemo possimus harum cumque fuga quod</p> 
                        <img src="img/user-2.png"width=150px>
                        <h3>Mike Smith</h3>
               </div>
               <div class="pic3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem, ipsum dolor sit amet consectetur 
                         adipisicing elit.Sint nostrum consequuntur nihil ducimus nam
                         corporis nemo possimus harum cumque fuga quod</p> 
                         <img src="img/user-3.png"width=150px> 
                         <h3>Mabel Joe</h3>
              </div>
        </div>
        </div>
        </div>
   
   <?php include '../inxhweb/include/footer.php' ?>
</body>
</html>