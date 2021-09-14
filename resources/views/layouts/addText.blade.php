@section('header_content')
<div class="card bg-transparent border-0">
    <div class="col-lg-3 col-sm-3 align-self-center">
        <div class="card-img">
            <img  class="img-fluid"  src="{{ asset('img/app/contact.png') }}" alt="">
        </div>
    </div>
    <div class="card-body">
        <form name="comment" id="comment_form">
            @csrf
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <span class="text-danger" id="error"></span>
                    <div class="form-group mb-4">
                        <label for="name" class="text-light h2">Имя <span class="text-danger">*</span></label><br>
                        <input class="form-control bg-dark text-light" type="text" name="name" id="name" required>
                        <span class="text-danger" id="error_name"></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-light h2">Email <span class="text-danger">*</span></label><br>
                        <input class="form-control bg-dark text-light" type="email" name="email" id="email" required>
                        <span class="text-danger" id="error_email"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 ml-auto p-2">
                    <div class="form-group">
                        <label for="body" class="text-light h2">Комментария <span class="text-danger">*</span></label><br>
                        <textarea class="form-control bg-dark text-light" name="comment" id="comment" rows="5" required></textarea>
                        <span class="text-danger" id="error_comment"></span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="form-group">
                    <input class="btn btn-danger btn-sm" id="record" value="Записать">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
