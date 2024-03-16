@extends('index')
@section('content')

<!-- MAIN CONTENT -->
<main>
    <div class="main-container">
        <div class="product-section container">
            <section class="top-product-section">
                <div class="tp-header margin-bottom-lg">
                    <p class="subheading">Sản phẩm nổi bật</p>
                    <div class="tp-btn-section">
                        <button class="btn btn--full btn--all">Xem tất cả</button>
                        <button class="btn-circle btn-pre">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>
                        <button class="btn-circle btn-next">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>
                <style>
                    
                </style>

                <div class="top-books grid grid-5--columns">
                    <div class="top-book">
                        <div class="tb-img-box">
                            <a href="{{URL::to('/details-book')}}">
                                <img class="tb-img" src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Cây cam ngọt của tôi" />
                            </a>
                        </div>
                        <div class="tb-text-box">
                            <p class="tb-title">Cây cam ngọt của tôi</p>
                            <p class="tb-author">Jose Mauro de Vasconcelos</p>
                        </div>
                    </div>
                    <div class="top-book">
                        <div class="tb-img-box">
                            <img class="tb-img" src="{{asset('public/frontend/imgs/top-books/book2.jpeg')}}" alt="Cây cam ngọt của tôi" />
                        </div>
                        <div class="tb-text-box">
                            <p class="tb-title">Toto-chan bên cửa sổ</p>
                            <p class="tb-author">Tetsuko Kuroyanagi</p>
                        </div>
                    </div>
                    <div class="top-book">
                        <div class="tb-img-box">
                            <img class="tb-img" src="{{asset('public/frontend/imgs/top-books/book3.jpeg')}}" alt="Cây cam ngọt của tôi" />
                        </div>
                        <div class="tb-text-box">
                            <p class="tb-title">Lược sử kinh tế học</p>
                            <p class="tb-author">Niall Kishtainy</p>
                        </div>
                    </div>
                    <div class="top-book">
                        <div class="tb-img-box">
                            <img class="tb-img" src="{{asset('public/frontend/imgs/top-books/book4.jpeg')}}" alt="Cây cam ngọt của tôi" />
                        </div>
                        <div class="tb-text-box">
                            <p class="tb-title">Đắc nhân tâm</p>
                            <p class="tb-author">Dale Carnegie</p>
                        </div>
                    </div>
                    <div class="top-book">
                        <div class="tb-img-box">
                            <img class="tb-img" src="{{asset('public/frontend/imgs/top-books/book5.jpeg')}}" alt="Cây cam ngọt của tôi" />
                        </div>
                        <div class="tb-text-box">
                            <p class="tb-title">Số đỏ</p>
                            <p class="tb-author">Vũ Trọng Phụng</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PRODUCT SECTION -->
            <section class="products">
                <div class="bookshelf">
                    <h2 class="heading-secondary bookshelf-heading">
                        Văn học - Tiểu thuyết
                    </h2>
                    <ul class="bookshelf-list">
                        <li class="selected">
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/1">Kinh điển</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/2">Nước ngoài</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/3">Việt Nam</a>
                        </li>
                    </ul>
                    <div class="bookshelf-container">
                        <div class="books-container grid grid-5--columns margin-bottom-lg">
                            <div class="bs-img-box" role="img" aria-label="Ảnh bìa tiểu thuyết"></div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book2.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book3.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-all__container">
                            <button class="btn btn--full btn-bs-all">Xem tất cả</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="products">
                <div class="bookshelf">
                    <h2 class="heading-secondary bookshelf-heading">
                        Văn học - Tiểu thuyết
                    </h2>
                    <ul class="bookshelf-list">
                        <li class="selected">
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/1">Kinh điển</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/2">Nước ngoài</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/3">Việt Nam</a>
                        </li>
                    </ul>
                    <div class="bookshelf-container">
                        <div class="books-container grid grid-5--columns margin-bottom-lg">
                            <div class="bs-img-box" role="img" aria-label="Ảnh bìa tiểu thuyết"></div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-all__container">
                            <button class="btn btn--full btn-bs-all">Xem tất cả</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="products">
                <div class="bookshelf">
                    <h2 class="heading-secondary bookshelf-heading">
                        Văn học - Tiểu thuyết
                    </h2>
                    <ul class="bookshelf-list">
                        <li class="selected">
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/1">Kinh điển</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/2">Nước ngoài</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/3">Việt Nam</a>
                        </li>
                    </ul>
                    <div class="bookshelf-container">
                        <div class="books-container grid grid-5--columns margin-bottom-lg">
                            <div class="bs-img-box" role="img" aria-label="Ảnh bìa tiểu thuyết"></div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-all__container">
                            <button class="btn btn--full btn-bs-all">Xem tất cả</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

@endsection