@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                @endif
                            </div>
                            <div class="name p-2">
                                <h1>{{ Str::limit($headline->name, 70) }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="introduction mx-auto">{{ Str::limit($headline->introduction, 650) }}</p>
                    </div>
                </div>
            </div>
            @endif
            <hr coloe="#c0c0c0">
            <div class="row">
                <div class="profiles col-md-8 mx-auto mt-3">
                    @foreach($profiles as $profiles)
                        <div class="profiles">
                            <div class="row">
                                <div class="text col-md-6">
                                    <div class="date">
                                        {{ $profiles->updated_at->format('Y年m月d日') }}
                                    </div>
                                    <div class="name">
                                        {{ Str::limit($profiles->name, 150) }}
                                    </div>
                                    <div class="introduction mt-3">
                                        {{ str::limit($profiles->introduction, 1500) }}
                                    </div>
                                    
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr color="#c0c0c0">
                    @endforeach
                </div>
            </div>
    </div>
    @endsection
    