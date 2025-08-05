@extends('layouts.admin')
@section('title')
    Send Email Notifications
@endsection

@section('adminContent')

    <form action="{{ route('sendemail') }}" method="post">
        @csrf
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Send Email To clients</h4>

                        <div class="main-container">

                            <style>
                                .main-container {
                                    width: 95%;

                                    margin-left: auto;
                                    margin-right: auto;
                                }

                                .ck {
                                    /* background: black !important; */
                                }

                                .ck-editor__editable {
                                    background-color: rgba(24, 26, 30, 0.879) !important;
                                    color: white;
                                    height: 55vh;
                                }
                            </style>
                            <div class="form-group mt-4">
                                <label for="exampleInputName1">Reciever's Email Address</label>
                                <input name="email" value="{{ $client->email ?? '' }}" type="email"
                                    class="form-control text-white" id="exampleInputName1" placeholder="">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <label for="exampleInputName1">Email Subject</label>
                                <input name="subject" value="Notice From Unservicemilitary" type="text"
                                    class="form-control text-white" id="exampleInputName1" placeholder="">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <h4>Message Body:</h4>
                            <textarea id="editor" name="message">
                                <p>
                                    <span class="text-big">Hi</span> <span style="color:rgb(251,87,11);"
                                        class="text-big"><strong>{{ $client->firstname ?? $client->name }}</strong></span><span
                                        style="color:rgb(251,87,11);">,
                                    </span>
                                </p>
                                <p>Continue The Rest Messages Here !!!</p>
                            </textarea>
                                
                            

                            <button type="submit" class="btn-success btn btn-lg float-end mt-4">Send Email</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>



    <script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
        }
    }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font
        } from 'ckeditor5';
        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Paragraph, Bold, Italic, Font],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <!-- A friendly reminder to run on a server, remove this during the integration. -->
    <script>
        window.onload = function() {
            if (window.location.protocol === 'file:') {
                alert('This sample requires an HTTP server. Please serve this file with a web server.');
            }
        };
    </script>
@endsection
