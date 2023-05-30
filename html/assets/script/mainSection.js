{
    const $carousel_cells = $('.section1 .product-carousel li');
    const $carousel_dots = $('.section1 .carousel-dots li');
    const $carousel_nav = $('.section1 .carousel-nav');
    let selected_product_index = 0;
    function selectProduct(index) {
    selected_product_index = index % $carousel_cells.length;
    if (selected_product_index < 0) selected_product_index = $carousel_cells.length + selected_product_index;
    $carousel_cells.each(function(i) {
        let offset = i - selected_product_index;
        if (offset < 0) offset += $carousel_cells.length;
        let index;
        for (index = 0; index < $carousel_cells.length + 1; index++) {
        $(this).removeClass('item-' + index).addClass('item-' + (offset + 1));
        }
    });
    $carousel_dots.eq(index).addClass('active').siblings('li').removeClass('active');
    }
    /* Arrow clicks */
    $carousel_nav.click(function() {
    const delta = $(this).hasClass('prev') ? -1 : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    selectProduct(delta_product_index);
    });
    /* Can clicks */
    $carousel_cells.click(function () {
    selectProduct($(this).index());
    });
    /* Pagination */
    $carousel_dots.click(function (e) {
    selectProduct($(this).index());
    $(e.currentTarget).addClass('active').siblings('li').removeClass('active');
    });
    /* Left/Right key arrows */
    $(document).keydown(e => {
    const delta = e.keyCode == 37 ? -1  : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    if ((e.keyCode == 37) || (e.keyCode == 39)) {
        selectProduct(delta_product_index);
        return false;
    }
    });
    /*
    Inspired by:
    https://www.7up.com/en/products
    */
}
{
    const $carousel_cells = $('.section2 .product-carousel li');
    const $carousel_dots = $('.section2 .carousel-dots li');
    const $carousel_nav = $('.section2 .carousel-nav');
    let selected_product_index = 0;
    function selectProduct(index) {
    selected_product_index = index % $carousel_cells.length;
    if (selected_product_index < 0) selected_product_index = $carousel_cells.length + selected_product_index;
    $carousel_cells.each(function(i) {
        let offset = i - selected_product_index;
        if (offset < 0) offset += $carousel_cells.length;
        let index;
        for (index = 0; index < $carousel_cells.length + 1; index++) {
        $(this).removeClass('item-' + index).addClass('item-' + (offset + 1));
        }
    });
    $carousel_dots.eq(index).addClass('active').siblings('li').removeClass('active');
    }
    /* Arrow clicks */
    $carousel_nav.click(function() {
    const delta = $(this).hasClass('prev') ? -1 : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    selectProduct(delta_product_index);
    });
    /* Can clicks */
    $carousel_cells.click(function () {
    selectProduct($(this).index());
    });
    /* Pagination */
    $carousel_dots.click(function (e) {
    selectProduct($(this).index());
    $(e.currentTarget).addClass('active').siblings('li').removeClass('active');
    });
    /* Left/Right key arrows */
    $(document).keydown(e => {
    const delta = e.keyCode == 37 ? -1  : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    if ((e.keyCode == 37) || (e.keyCode == 39)) {
        selectProduct(delta_product_index);
        return false;
    }
    });
    /*
    Inspired by:
    https://www.7up.com/en/products
    */
}
{
    const $carousel_cells = $('.section3 .product-carousel li');
    const $carousel_dots = $('.section3 .carousel-dots li');
    const $carousel_nav = $('.section3 .carousel-nav');
    let selected_product_index = 0;
    function selectProduct(index) {
    selected_product_index = index % $carousel_cells.length;
    if (selected_product_index < 0) selected_product_index = $carousel_cells.length + selected_product_index;
    $carousel_cells.each(function(i) {
        let offset = i - selected_product_index;
        if (offset < 0) offset += $carousel_cells.length;
        let index;
        for (index = 0; index < $carousel_cells.length + 1; index++) {
        $(this).removeClass('item-' + index).addClass('item-' + (offset + 1));
        }
    });
    $carousel_dots.eq(index).addClass('active').siblings('li').removeClass('active');
    }
    /* Arrow clicks */
    $carousel_nav.click(function() {
    const delta = $(this).hasClass('prev') ? -1 : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    selectProduct(delta_product_index);
    });
    /* Can clicks */
    $carousel_cells.click(function () {
    selectProduct($(this).index());
    });
    /* Pagination */
    $carousel_dots.click(function (e) {
    selectProduct($(this).index());
    $(e.currentTarget).addClass('active').siblings('li').removeClass('active');
    });
    /* Left/Right key arrows */
    $(document).keydown(e => {
    const delta = e.keyCode == 37 ? -1  : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    if ((e.keyCode == 37) || (e.keyCode == 39)) {
        selectProduct(delta_product_index);
        return false;
    }
    });
    /*
    Inspired by:
    https://www.7up.com/en/products
    */
}
{
    const $carousel_cells = $('.section4 .product-carousel li');
    const $carousel_dots = $('.section4 .carousel-dots li');
    const $carousel_nav = $('.section4 .carousel-nav');
    let selected_product_index = 0;
    function selectProduct(index) {
    selected_product_index = index % $carousel_cells.length;
    if (selected_product_index < 0) selected_product_index = $carousel_cells.length + selected_product_index;
    $carousel_cells.each(function(i) {
        let offset = i - selected_product_index;
        if (offset < 0) offset += $carousel_cells.length;
        let index;
        for (index = 0; index < $carousel_cells.length + 1; index++) {
        $(this).removeClass('item-' + index).addClass('item-' + (offset + 1));
        }
    });
    $carousel_dots.eq(index).addClass('active').siblings('li').removeClass('active');
    }
    /* Arrow clicks */
    $carousel_nav.click(function() {
    const delta = $(this).hasClass('prev') ? -1 : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    selectProduct(delta_product_index);
    });
    /* Can clicks */
    $carousel_cells.click(function () {
    selectProduct($(this).index());
    });
    /* Pagination */
    $carousel_dots.click(function (e) {
    selectProduct($(this).index());
    $(e.currentTarget).addClass('active').siblings('li').removeClass('active');
    });
    /* Left/Right key arrows */
    $(document).keydown(e => {
    const delta = e.keyCode == 37 ? -1  : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    if ((e.keyCode == 37) || (e.keyCode == 39)) {
        selectProduct(delta_product_index);
        return false;
    }
    });
    /*
    Inspired by:
    https://www.7up.com/en/products
    */
}
{
    const $carousel_cells = $('.section5 .product-carousel li');
    const $carousel_dots = $('.section5 .carousel-dots li');
    const $carousel_nav = $('.section5 .carousel-nav');
    let selected_product_index = 0;
    function selectProduct(index) {
    selected_product_index = index % $carousel_cells.length;
    if (selected_product_index < 0) selected_product_index = $carousel_cells.length + selected_product_index;
    $carousel_cells.each(function(i) {
        let offset = i - selected_product_index;
        if (offset < 0) offset += $carousel_cells.length;
        let index;
        for (index = 0; index < $carousel_cells.length + 1; index++) {
        $(this).removeClass('item-' + index).addClass('item-' + (offset + 1));
        }
    });
    $carousel_dots.eq(index).addClass('active').siblings('li').removeClass('active');
    }
    /* Arrow clicks */
    $carousel_nav.click(function() {
    const delta = $(this).hasClass('prev') ? -1 : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    selectProduct(delta_product_index);
    });
    /* Can clicks */
    $carousel_cells.click(function () {
    selectProduct($(this).index());
    });
    /* Pagination */
    $carousel_dots.click(function (e) {
    selectProduct($(this).index());
    $(e.currentTarget).addClass('active').siblings('li').removeClass('active');
    });
    /* Left/Right key arrows */
    $(document).keydown(e => {
    const delta = e.keyCode == 37 ? -1  : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    if ((e.keyCode == 37) || (e.keyCode == 39)) {
        selectProduct(delta_product_index);
        return false;
    }
    });
    /*
    Inspired by:
    https://www.7up.com/en/products
    */
}
{
    const $carousel_cells = $('.section6 .product-carousel li');
    const $carousel_dots = $('.section6 .carousel-dots li');
    const $carousel_nav = $('.section6 .carousel-nav');
    let selected_product_index = 0;
    function selectProduct(index) {
    selected_product_index = index % $carousel_cells.length;
    if (selected_product_index < 0) selected_product_index = $carousel_cells.length + selected_product_index;
    $carousel_cells.each(function(i) {
        let offset = i - selected_product_index;
        if (offset < 0) offset += $carousel_cells.length;
        let index;
        for (index = 0; index < $carousel_cells.length + 1; index++) {
        $(this).removeClass('item-' + index).addClass('item-' + (offset + 1));
        }
    });
    $carousel_dots.eq(index).addClass('active').siblings('li').removeClass('active');
    }
    /* Arrow clicks */
    $carousel_nav.click(function() {
    const delta = $(this).hasClass('prev') ? -1 : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    selectProduct(delta_product_index);
    });
    /* Can clicks */
    $carousel_cells.click(function () {
    selectProduct($(this).index());
    });
    /* Pagination */
    $carousel_dots.click(function (e) {
    selectProduct($(this).index());
    $(e.currentTarget).addClass('active').siblings('li').removeClass('active');
    });
    /* Left/Right key arrows */
    $(document).keydown(e => {
    const delta = e.keyCode == 37 ? -1  : 1;
    const $delta_product = $(`.product-carousel li:eq(${(selected_product_index + delta) % $carousel_cells.length})`);
    const delta_product_index = parseInt($delta_product.index());
    if ((e.keyCode == 37) || (e.keyCode == 39)) {
        selectProduct(delta_product_index);
        return false;
    }
    });
    /*
    Inspired by:
    https://www.7up.com/en/products
    */
}