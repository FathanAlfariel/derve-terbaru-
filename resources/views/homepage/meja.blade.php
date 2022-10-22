<style>
    /**
      Single card
    */
    .card {
      position: relative;
    
      overflow: hidden;
      border-radius: 3px;
      border: 1px solid rgba(0,0,0,.2);
      max-width: 300px;
      
      text-decoration: none;
      color: white;
      
      cursor: pointer;
      transition: all .1s linear;
      background-color: rgb(51 65 85);;
    
      border-radius: 1rem;
    }
    
      .card a {
        text-decoration: none;
      }
    
      .card .image {
        height: 200px;
        padding: 8px;
        overflow: hidden;
      }
    
        .card .image img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          filter: grayscale(.5);
          border-radius: 0.5rem;
        }
    
      .card .title {
        margin: 0;
        padding: 10px 10px 5px 10px;
    
        font-size: 16px;
        font-weight: bold;
        color: rgb(255, 255, 255);
      }
    
      .card .content {
        padding: 0 10px 40px 10px;
        transition: color .1s linear;
      }
    
        .card .content p {
          margin: 7px 0;
          font-size: 14px;
          opacity: .8;
        }
    
        .card .content .price {
          position: absolute;
          bottom: 8px;
        }
    
          .card .content .price .new-price {
            font-weight: bold;
          }
    
          .card .content .price .original-price {
            margin-left: 5px;
            font-size: 14px;
            font-style: italic;
            opacity: .5;
            text-decoration: line-through;
          }
    
      /* Hover state = add box shadow, underline the title */
      .card:hover {
        border-color: rgba(0,0,0,.4);
        box-shadow: 0 0 10px 0 rgba(0,0,0,.15);
      }
    
        .card:hover .image img,
        .card:focus .image img {
          filter: grayscale(0);
        }
    
        .card:hover .title {
          text-decoration: underline;
        }
    
        .card a:focus {
          outline: none;
        }
    
      /* Focus state = turn text blue, add large blue outline */
      /* NOTE: :focus-within is not supported in IE11 or Edge as of Jan 2020. To add support, use a polyfill such as https://github.com/matteobad/focus-within-polyfill */
      .card:focus-within {
        border-color: hsl(204, 86%, 53%);
        box-shadow: 0 0 0 2px hsl(204, 86%, 53%);
      }
    
        .card:focus-within .title,
        .card:focus-within .content {
          color: hsl(217, 71%, 53%);
        }
    
        .card:focus-within .title {
          text-decoration: underline;
        }
    
    /** Credits at bottom */
    .credits {
      display: inline-block;
      margin-top: 20px;
      margin-left: 40px;
      padding: 10px;
      font-size: 14px;
      color: black;
      text-decoration: none;
      opacity: .7;
    }
    
      .credits img {
        height: 30px;
        margin-left: 5px;
        margin-top: -2px;
        vertical-align: middle;
      }
    
      .credits:hover,
      .credits:focus {
        opacity: 1;
      }
</style>

<div class="grid gap-2 grid-cols-2 md:grid-cols-4 p-4 pt-1 bg-transparent rounded-lg dark:bg-gray-800">
          
    <div class="card splide__slide" role="group" aria-label="card 2 of 5">
      <a href="/detail_restaurant">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/curology-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">Second product</h2>
      </a>

      <div class="content">  
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

    <div class="card splide__slide" role="group" aria-label="card 3 of 5">
      <a href="#">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/imani-clovis-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">Third product</h2>
      </a>

      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

    <div class="card splide__slide" role="group" aria-label="card 4 of 5">
      <a href="#">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/rachit-tank-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">Fourth product</h2>
      </a>

      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

    <div class="card splide__slide" role="group" aria-label="card 5 of 5">
      <a href="#">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/deanna-alys-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">Fifth product</h2>
      </a>

      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

    <div class="card splide__slide" role="group" aria-label="card 1 of 5">
      <a href="#">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/galina-n-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">First product</h2>
      </a>

      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <!-- add "now"? -->
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

    <div class="card splide__slide" role="group" aria-label="card 1 of 5">
      <a href="#">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/galina-n-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">First product</h2>
      </a>

      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <!-- add "now"? -->
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

    <div class="card splide__slide" role="group" aria-label="card 1 of 5">
      <a href="#">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/galina-n-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">First product</h2>
      </a>

      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <!-- add "now"? -->
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

    <div class="card splide__slide" role="group" aria-label="card 2 of 5">
      <a href="#">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/curology-300x300.jpg" class="product-image" alt="">
        </div>
        <h2 class="title">Second product</h2>
      </a>

      <div class="content">  
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="price">
          <span class="new-price">$9.99</span>
          <span class="original-price">
            <span class="sr-only">Originally:</span>
            $100.00
          </span>
        </div>
      </div>
    </div>

</div>