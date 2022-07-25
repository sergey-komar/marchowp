<?php
if ( ! is_active_sidebar( 'woocommerce' ) ) {
	return;
}
?>
 <div class="shop__filters filter">
<?php dynamic_sidebar( 'woocommerce' )?>





<div class="filter__item filter-size">
  <h3 class="filter__title">Size Filter</h3>
  <form action="#" class="filter-size__form">

    <label  class="filter-size__label">
      <input type="checkbox" class="filter-size__input">
      <span class="filter-size__checkbox"></span>
      <span class="filter-size__text">X-small</span>
    </label>

    <label  class="filter-size__label">
      <input type="checkbox" class="filter-size__input">
      <span class="filter-size__checkbox"></span>
      <span class="filter-size__text">Small</span>
    </label>

    <label  class="filter-size__label">
      <input type="checkbox" class="filter-size__input">
      <span class="filter-size__checkbox"></span>
      <span class="filter-size__text">Medium</span>
    </label>

    <label  class="filter-size__label">
      <input type="checkbox" class="filter-size__input">
      <span class="filter-size__checkbox"></span>
      <span class="filter-size__text">Large</span>
    </label>

    <label  class="filter-size__label">
      <input type="checkbox" class="filter-size__input">
      <span class="filter-size__checkbox"></span>
      <span class="filter-size__text">XXL</span>
    </label>
  </form>
</div>


<div class="filter__item filter-popular">
  <h3 class="filter__title">Popular Tags</h3>
  <form action="#" class="filter-popular__fotm">
    <label  class="filter-popular__label">
      <input type="checkbox" class="filter-popular__input">
      <span class="filter-popular__checkbox">
        Sweetshir
      </span>
    </label>
    <label  class="filter-popular__label">
      <input type="checkbox" class="filter-popular__input" checked>
      <span class="filter-popular__checkbox">
        Man Accessories
      </span>
    </label>
    <label  class="filter-popular__label">
      <input type="checkbox" class="filter-popular__input">
      <span class="filter-popular__checkbox">
        Fashion
      </span>
    </label>
    <label  class="filter-popular__label">
      <input type="checkbox" class="filter-popular__input">
      <span class="filter-popular__checkbox">
        Polo
      </span>
    </label>
    <label  class="filter-popular__label">
      <input type="checkbox" class="filter-popular__input">
      <span class="filter-popular__checkbox">
        T-Shirt
      </span>
    </label>
    <label  class="filter-popular__label">
      <input type="checkbox" class="filter-popular__input">
      <span class="filter-popular__checkbox">
        Jewellery
      </span>
    </label>
  </form>
</div>

</div>