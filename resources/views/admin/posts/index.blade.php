@extends('admin.layouts.dashboard')

@section('content')

    <div class="row py-lg-2">
        <div class="col-md-6">
            <h2>This is Post List</h2>
        </div>
        @cannot('isManager')
            @can('create', App\Models\Post::class)
            <div class="col-md-6">
                <a href="/dashboard" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Upload new Resource</a>
            </div>
            @endcan
        @endcannot
    </div>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Uploaded Resources</div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Course</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>User</th>
                    <th>Quiz</th>
                    <th>Tools</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Course</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>User</th>
                    <th>Quiz</th>
                    <th>Tools</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post['id'] }}</td>
                            <td>{{ $post->course['name'] }}</td>
                            <td>{!! Str::limit($post['description'], 40) !!}</td>
                            <td><img src="{{$post->thumbnailLocation}}" alt="{{ $post['image_url'] }}" width="100"></td>
                            <td>{{ $post->user['firstname'] }}</td>

                            <td>
                                <a href="#"  data-toggle="modal" data-target="#QuizAddModal" data-quizid="{{$post['id']}}"><i class="fas fa-plus" id="{{$post['id']}}"></i></a>
                                <a href="/quizs/{{ $post['id'] }}/edit"><i class="fa fa-edit"></i></a>
                                <a href="#"  data-toggle="modal" data-target="#QuizDeleteModal" data-postid="{{$post['id']}}"><i class="fas fa-trash-alt"></i></a>                                                                                     
                            </td>

                            <td>
                                <a href="/posts/{{ $post['id'] }}"><i class="fa fa-eye"></i></a>

                                @cannot('isManager')
                                    @can('edit', $post)
                                        <a href="/posts/{{ $post['id'] }}/edit"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('delete', $post)
                                        <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$post['id']}}"><i class="fas fa-trash-alt"></i></a>
                                    @endcan
                                @endcannot

                                @if ($post->published)                                     
                                    <span>
                                        <i class="fa fa-check-square" style="color:green"></i>                                                                                      
                                    </span>
                                @endif                                                       
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <!--Resources delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you shure you want to delete this?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Select "delete" If you realy want to delete this post.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="POST" action="/posts/">
                @method('DELETE')
                @csrf
                <input type="hidden" id="post_id" name="post_id" value="">
                <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Delete</a>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!-- Quiz Add Modal-->
    <div class="modal fade" id="QuizAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Quiz </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/addquiz" enctype="multipart/form-data" id="quizAddForm">
               
                @csrf 
                <input type="hidden" id="quiz_id" name="resource_id" value="">              
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Quastion:  </label>
                    <textarea class="form-control" id="message-text" name="question" required></textarea>
                    <ul class="nav nav-pills my-2" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " id="chForm-tab" data-toggle="pill" href="#chForm" 
                           role="tab" aria-controls="chForm" aria-selected="true" onclick="backch()">Choice</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="TFform-tab" data-toggle="pill" href="#TFform" 
                           role="tab" aria-controls="TFform" aria-selected="false" onclick="backtf()">True/False</a>
                    </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show " id="chForm" role="tabpanel" aria-labelledby="chForm-tab">
                        <div class="form-group">
                            <label for="Choice1">Choice 1</label>
                            <input type="text" class="form-control" id="Choice1" aria-describedby="emailHelp" name="chA" required >
                        </div>
                        <div class="form-group">
                            <label for="Choice2">Choice 2</label>
                            <input type="text" class="form-control" id="Choice2" aria-describedby="emailHelp" name="chB" required>
                        </div>
                        <div class="form-group">
                            <label for="Choice3">Choice 3</label>
                            <input type="text" class="form-control" id="Choice3" aria-describedby="emailHelp" name="chC" required>
                        </div>
                        <div class="form-group">
                            <label for="Choice4">Choice 4</label>
                            <input type="text" class="form-control" id="Choice4" aria-describedby="emailHelp" name="chD" required>
                        </div>
                        <label>Answer </label>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="choice1" name="ans" class="custom-control-input" value="A" required>
                        <label class="custom-control-label" for="choice1">Choice1</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="choice2" name="ans" class="custom-control-input" value="B" required>
                        <label class="custom-control-label" for="choice2">Choice2</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="choice3" name="ans" class="custom-control-input" value="C" required>
                        <label class="custom-control-label" for="choice3">Choice3</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="choice4" name="ans" class="custom-control-input" value="D" required>
                        <label class="custom-control-label" for="choice4">Choice4</label>
                        </div>
                        
                        </div>
                        <div class="tab-pane fade" id="TFform" role="tabpanel" aria-labelledby="TFform-tab">
                        <div class="form-group">
                        <label for="disabledTextInput">TRUE</label>
                        <input type="text" id="Choice1" class="form-control" value="TRUE"  name="chA" >
                        </div>
                        <div class="form-group">
                        <label for="disabledTextInput">FALSE</label>
                        <input type="text" id="Choice2" class="form-control" value="FALSE"  name="chB">
                        </div>
                        <label >Answer </label>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="true" name="ans" class="custom-control-input" value="True">
                        <label class="custom-control-label" for="true">TRUE</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="false" name="ans" class="custom-control-input" value="False">
                        <label class="custom-control-label" for="false">FALSE</label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                    <label for="disciption" class="col-form-label">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="col">
                    <label for="time" class="col-form-label">video min:</label>
                    <input type="number" class="form-control" id="time" min="0" step="0.5" value="0" name="time">
                    </div>
                </div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
                    <!-- <input type="hidden" id="post_id" name="post_id" value=""> -->
                    <!-- <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Submit</a> -->
                    <button class="btn btn-primary" type="submit" >Submit</button>
                </div>  
            </form>  
            </div>
            
        </div>
        </div>
    </div>

    </div>



@endsection

@section('js_post_page')
    <script>
    var ch=document.getElementById('chForm');
        var chForm=ch.innerHTML;
        var tf=document.getElementById('TFform');
        var TFform=tf.innerHTML;
        
    function backch(){
        $('#TFform').empty();
        ch.innerHTML=chForm;
    }
    function backtf(){      
        
        $('#chForm').empty();
        tf.innerHTML = TFform;
       return false;  
    }
    </script>
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var post_id = button.data('postid') 
            
            var modal = $(this)
            modal.find('.modal-footer #post_id').val(post_id);
            modal.find('form').attr('action','/posts/' + post_id);
        })
    </script>
    <script>
        $('#QuizAddModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var quiz_id = button.data('quizid') 
            
            var modal = $(this)
            modal.find('.modal-body #quiz_id').val(quiz_id);
            // modal.find('form').attr('action','/posts/' + post_id);
        })
    </script>
    <!-- Add quizzes  -->
<script >
  var form= document.getElementById('quizAddForm');
    $(document).ready( function () {
    $('form').on('submit',function(e) {
      e.preventDefault();
      var formdata = new FormData(form);
      $.ajax({
          type:"POST",
          url: "addquiz",
          data: formdata,
           processData: false,
          contentType: false,
          cache: false,
      
          success: function(response){
            form.reset();
            alert("quiz Uploaded");
          },
          error: function(error){
          alert("Error! Occured while uploading quiz!");
          }
          });
      });
  });
</script>  
@endsection