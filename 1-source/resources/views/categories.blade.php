@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->

</head>

<body>



<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<form action="searchCategory" method="get">
<input type="text" id="categoryName" name="categoryName">
<button type="submit">Search</button>
</form>
    <h1 class="display-4">Category</h1>

</div>

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Web</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <th scope="row">{!! $category->category_id !!}</th>
                    <td>{!! $category->category_name !!}</td>
                 
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $categories->render() !!}
    </div>

</div>


</body></html>
@endsection