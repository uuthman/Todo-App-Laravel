<?php
/**
 * Created by PhpStorm.
 * User: AYINDE
 * Date: 20/08/2019
 * Time: 23:06
 */
?>
@extends('layouts.app')

@section('title')
    Single Todo: {{$todo->name}}
    @endsection

@section('content')
    <h1 class="text-center my-5">
        {{$todo->name}}
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Detail
                </div>

                <div class="card-body">
                    {{$todo->description}}
                </div>
            </div>
            <a href="/todos/{{$todo->id}}/edit" class="btn btn-info my-3">Edit</a>
            <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger my-3">Delete</a>
        </div>
    </div>
    @endsection