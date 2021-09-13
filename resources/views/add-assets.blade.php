
@extends('layouts.master')
@section('content')
    <div class="row ml-5">
        <div class="col lg-6">
        <!--form basic --> 
            <div class="card mb-4">
                <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Oylik summani qo'yish</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('month.asset.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Oylik qo'yiladigan summa</label>
                            <input type="text" class="form-control" name="asset" placeholder="Summa">   
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Comment</label>
                            <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>  
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Day</label>
                            <select name="day" id="day" class="form-control">
                                @for($i=1; $i<= (int) date('t'); $i++)
                                    <option value="{{$i}}"> {{$i}} </option>
                                @endfor
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Month</label>
                            <select name="month" id="month" class="form-control">
                                @for($i=1; $i<= 12; $i++)
                                    <option value="{{$i}}"> {{$i}} </option>
                                @endfor
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Year</label>
                            <input type="text" name="year" class="form-control" disabled value="{{date('Y')}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection