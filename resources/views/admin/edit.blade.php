@extends('layout')
@section('content')
    

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Edit film</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('films.update', $film->id) }}" method="POST" class="form">
                    @csrf
                    @method('PUT')
                    <div class="row">
               

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="name" class="form__input" value="{{$film->name}}">
                                </div>

                                <div class="col-12">
                                    <textarea id="text" name="description" class="form__textarea" >{{$film->description}}</textarea>
                                </div>

                                <div class="col-12">
                                    <select name="status" id="status" class="js-example-basic-multiple" >
                                        <option value="0">Disabled</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                                <div class="col-12">
                                    <input type="submit" value="Update" class="form__btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>
</main>
@endsection