@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6 text-center mt-5 mb-5">
                    <h1>Выводим комментарии</h1>
                </div>
            </div>
            <div class="row " id="comment-area">

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset("js/comment.js") }}"></script>
@endsection
