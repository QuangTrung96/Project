<div class="form-group">
    <label>Title</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>Category</label>
    {!! Form::select('category_id',$categories, null,["class"=>"form-control"]) !!}

</div>
<div class="form-group">
    <label>Image</label>
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>Price</label>
    {!! Form::text('orginalPrice', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>Author</label>
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>pubishingCompany</label>
    {!! Form::text('pubishingCompany', null, ['class' => 'form-control']) !!}
</div>
<button type="submit" class="btn btn-primary">Save</button>