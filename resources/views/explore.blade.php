    @extends('layouts.app')

    @section('style')
        <style>
            .scrollable-btns::-webkit-scrollbar {
                display: none;
            }
        </style>
    @endsection

    @section('content')
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- page content -->
        <main class="py-4">
            <!-- page header -->
            <section class="pt-0 pb-0 p-3">
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <h1>Explore Questions!</h1>
                    <div>
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#newQuestionModal">New Question</button>
                    </div>
                </div>
            </section>

            <!-- New question modal -->
            <div class="modal fade" id="newQuestionModal" tabindex="-1" aria-labelledby="newQuestionModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 10px; padding: 20px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newQuestionModalLabel" style="font-size: 1.5rem; font-weight: bold;">Create New Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="category" class="form-label">Select Category</label>
                                <select class="form-select" id="category" style="font-size: 1.1rem;">
                                    <option value="" disabled selected>Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                                    @endforeach
                                </select>
                                <small class="error-message" id="new-question-category-error-message" style="color: red; display: none; font-size: 12px; margin-top: 5px;">Please select a category.</small>
                            </div>

                            <div class="mb-3">
                                <label for="question" class="form-label">Your Question</label>
                                <textarea class="form-control" id="question" rows="5" placeholder="Write your question here..." style="font-size: 1.1rem; border-radius: 8px;"></textarea>
                                <small class="error-message" id="edit-question-content-error-message" style="color: red; display: none; font-size: 12px; margin-top: 5px;">Please write your question.</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 1.1rem; padding: 10px 20px;">Close</button>
                            <button type="button" class="btn btn-primary" id="createQuestionBtn" style="font-size: 1.1rem; padding: 10px 20px;">Create</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- categories list -->
            <section class="pt-0 pb-0 p-3">
                <!-- list title -->
                <div class="col-md-12 mt-3">
                    <h2>categories</h2>
                </div>
                <!-- list items -->
                <div class="col-md-12">
                    <div class="row mb-1">
                        <div class="col-12">
                            <div class="btn-group-container d-flex overflow-hidden mt-1" style="white-space: nowrap; scroll-behavior: smooth;">
                                <div class="scrollable-btns" style="display: flex; gap: 10px; overflow-x: auto; scroll-snap-type: x mandatory; padding-bottom: 10px;">
                                    <button class="btn btn-light category-btn active" id="category-btn-{{ $categories[0]['id'] }}" data-id="{{ $categories[0]['id'] }}">{{$categories[0]['name']}}</button>
                                    @for($i=1; $i<(count($categories)); $i++)
                                        <button class="btn btn-light category-btn" id="category-btn-{{ $categories[$i]['id'] }}" data-id="{{ $categories[$i]['id'] }}">
                                            {{$categories[$i]['name']}}</button>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- order & filters options list -->
            <section class="pt-0 pb-0 p-3">
                <div class="col-md-12 mt-3">
                    <!-- buttons list -->
                    <div class="row mb-1">
                        <!-- order options buttons -->
                        <div class="col-md-6 d-flex justify-content-between mb-2">
                            <button class="btn btn-light w-100 me-2 order-btn order-latest active">Latest</button>
                            <button class="btn btn-light w-100 me-2 order-btn order-popular">Popular</button>
                            <button class="btn btn-light w-100 me-2 order-btn order-oldest ">Oldest</button>
                        </div>
                        <!-- filter options buttons -->
                        <div class="col-md-6 d-flex justify-content-between mb-2">
                            <button class="btn btn-light w-100 me-2 filter-btn active">All</button>
                            <button class="btn btn-light w-100 me-2 filter-btn">Answered</button>
                            <button class="btn btn-light w-100 me-2 filter-btn">Unanswered</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Search bar -->
            <section class="pt-0 pb-0 p-3">
                <div class="col-md-12 mt-3">
                    <div class="input-group" style="height: 50px">
                        <label for="search"></label><input type="search" class="form-control" id="search" placeholder="Search for questions..." style="border-radius: 15px">
                    </div>
                </div>
            </section>

            <!-- Questions List -->
            <section class="pt-0 pb-0 p-1" id="questions-list">
                <!-- Questions space -->
            </section>

            <!-- Answers Modal -->
            <div class="modal fade" id="answersModal" tabindex="-1" aria-labelledby="answersModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 10px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="answersModalLabel" style="font-size: 1.5rem;">Answers</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <section class="modal-body mb-3 mt-3 m-0 p-0" id="answersContainer">

                        </section>
                    </div>
                </div>
            </div>

            <!-- Edit question modal -->
            <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 10px; padding: 20px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editQuestionModalLabel" style="font-size: 1.5rem; font-weight: bold;">Edit Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" id="edit-question-text" rows="4"></textarea>
                            <small class="error-message" id="edit-question-error-message" style="color: red; display: none; font-size: 12px; margin-top: 5px;">You need to modify the question before submitting.</small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 1.1rem; padding: 10px 20px;">Close</button>
                            <button type="button" class="btn btn-primary" id="save-question-btn" style="font-size: 1.1rem; padding: 10px 20px;">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- delete question modal -->
            <div class="modal fade" id="deleteQuestionModal" tabindex="-1" aria-labelledby="deleteQuestionModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 10px; padding: 20px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteQuestionModalLabel" style="font-size: 1.5rem; font-weight: bold;">Alert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6 style="font-size: 1.25rem;">The question will be permanently deleted.<br>Do you want to complete the process?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 1.1rem; padding: 10px 20px;">Close</button>
                            <button type="button" class="btn btn-danger" id="delete-question-btn" style="font-size: 1.1rem; padding: 10px 20px;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit answer modal -->
            <div class="modal fade" id="editAnswerModal" tabindex="-1" aria-labelledby="editAnswerModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 10px; padding: 20px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editAnswerModalLabel" style="font-size: 1.5rem; font-weight: bold;">Edit Answer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" id="edit-answer-text" rows="4"></textarea>
                            <small class="error-message" id="edit-answer-error-message" style="color: red; display: none; font-size: 12px; margin-top: 5px;">You need to modify the answer before submitting.</small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 1.1rem; padding: 10px 20px;">Close</button>
                            <button type="button" class="btn btn-primary" id="save-answer-btn" style="font-size: 1.1rem; padding: 10px 20px;">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- delete answer modal -->
            <div class="modal fade" id="deleteAnswerModal" tabindex="-1" aria-labelledby="deleteAnswerModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 10px; padding: 20px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteAnswerModalLabel" style="font-size: 1.5rem; font-weight: bold;">Alert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6 style="font-size: 1.25rem;">The answer will be permanently deleted.<br>Do you want to complete the process?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 1.1rem; padding: 10px 20px;">Close</button>
                            <button type="button" class="btn btn-danger" id="delete-answer-btn" style="font-size: 1.1rem; padding: 10px 20px;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    @endsection

    @section('script')
        <script>
            $(document).ready(function() {
                //primary filters
                let selectedCategory = 1;
                let selectedFilter = 'all';
                let selectedOrder = 'latest';
                let search = null;

                //bring questions when loading the page for the first time
                fetchQuestions();

                //bring questions according to the specified category
                $(document).on('click', '.category-btn', function() {
                    $('.category-btn').removeClass('active');
                    $(this).addClass('active');
                    selectedCategory = $(this).data('id');
                    fetchQuestions();
                });

                //sort questions by selected option
                $(document).on('click', '.order-btn', function() {
                    $('.order-btn').removeClass('active');
                    $(this).addClass('active');
                    selectedOrder = $(this).text().toLowerCase();
                    fetchQuestions();
                });

                //filter questions according to the selected option
                $(document).on('click', '.filter-btn', function() {
                    $('.filter-btn').removeClass('active');
                    $(this).addClass('active');
                    selectedFilter = $(this).text().toLowerCase();
                    fetchQuestions();
                });

                //bring questions that match the search
                $('#search').on('input', function() {
                    search = $(this).val();
                    fetchQuestions();
                });

                //update question information
                function updateQuestionCard(questionID) {
                    let dataToSend = {
                        question_id: questionID,
                        _token: '{{ csrf_token() }}'
                    };
                    $.ajax({
                        url: "{{ route('question.show') }}",
                        type: 'POST',
                        data: dataToSend,
                        success: function(response) {
                            if (response && response.data) {
                                let question = response.data;
                                let questionHtml = defineQuestionHtml(question);
                                $('#question-card-' + questionID).replaceWith(questionHtml);
                            } else {
                                console.error('No data received for the question.');
                            }
                        },
                        error: function() {
                            console.error('Error fetching question details.');
                        }
                    });
                }

                //update answer information
                function updateAnswerCard(answerId) {
                    let dataToSend = {
                        answer_id: answerId,
                        _token: '{{ csrf_token() }}'
                    };
                    $.ajax({
                        url: "{{ route('answer.show') }}",
                        type: 'POST',
                        data: dataToSend,
                        success: function(response) {
                            if (response && response.data) {
                                let answer = response.data;
                                let answerHtml = defineAnswerHtml(answer);
                                $('#answer-card-' + answerId).replaceWith(answerHtml);
                            } else {
                                console.error('No data received for the question.');
                            }
                        },
                        error: function() {
                            console.error('Error fetching question details.');
                        }
                    });
                }

                //add or remove a like from the question and update its information
                $(document).on('click', '.like-btn', function() {
                    let questionID = $(this).data('id');
                    let dataToSend = {
                        question_id: questionID,
                        _token: '{{ csrf_token() }}'
                    };

                    $.ajax({
                        url: "{{ route('question.like') }}",
                        type: 'POST',
                        data: dataToSend,
                        success: function() {
                            updateQuestionCard(questionID);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error liking the question:', error);
                        }
                    });
                });

                //add or remove a like from the answer and update its information
                $(document).on('click', '.answer-like-btn', function() {
                    let answerID = $(this).data('id');
                    let dataToSend = {
                        answer_id: answerID,
                        _token: '{{ csrf_token() }}'
                    };

                    $.ajax({
                        url: "{{ route('answer.like') }}",
                        type: 'POST',
                        data: dataToSend,
                        success: function() {
                            updateAnswerCard(answerID);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error liking the question:', error);
                        }
                    });
                });

                //add an answer to the question and update its information
                $(document).on('click', '.answer-btn', function() {
                    let questionID = $(this).data('id');
                    let inputId = '#question-' + questionID + '-answer';
                    let answerContent = $(inputId).val();
                    let errorMessageId = '#question-' + questionID + '-answer-error-message';
                    let errorMessage = $(errorMessageId);

                    if (answerContent.trim() !== "") {
                        let dataToSend = {
                            question_id: questionID,
                            content: answerContent,
                            _token: '{{ csrf_token() }}'
                        };

                        $.ajax({
                            url: "{{ route('answer.create') }}",
                            type: 'POST',
                            data: dataToSend,
                            success: function(response) {
                                updateQuestionCard(questionID);
                                errorMessage.fadeOut();
                            },
                            error: function(xhr, status, error) {
                                console.error('Error submitting the answer:', error);
                            }
                        });
                    } else {
                        errorMessage.fadeIn();
                        setTimeout(function() {
                            errorMessage.fadeOut();
                        }, 5000);

                    }
                });

                //show the question addition form and process the addition process
                document.getElementById('newQuestionModal').addEventListener('click', function() {
                    $(document).on('click', '#createQuestionBtn', function() {
                        let categoryId = document.getElementById('category').value;
                        let questionContent = document.getElementById('question').value;
                        if (categoryId && questionContent) {
                            let dataToSend = {
                                category_id: categoryId,
                                content: questionContent,
                                _token: '{{ csrf_token() }}'
                            };

                            $.ajax({
                                url: "{{ route('question.create') }}",
                                type: 'POST',
                                data: dataToSend,
                                success: function() {
                                    $('#newQuestionModal').modal('hide');
                                    document.getElementById('category').value = '';
                                    document.getElementById('question').value = '';
                                    selectedCategory = categoryId;
                                    selectedOrder = 'latest';
                                    let categoryBtnId = '#category-btn-' + categoryId;
                                    fetchQuestions();
                                    $('.category-btn').removeClass('active');
                                    $('.order-btn').removeClass('active');
                                    $('.order-latest').addClass('active');
                                    $(categoryBtnId).addClass('active');
                                    let container = document.querySelector('.scrollable-btns');
                                    let target = document.getElementById(`category-btn-${categoryId}`);
                                    let offset = target.offsetLeft - container.offsetWidth + target.offsetWidth
                                    container.scrollLeft = offset;
                                },
                                error: function() {
                                }
                            });
                        } else {
                            if (!categoryId) {
                                $('#new-question-category-error-message').fadeIn();
                                setTimeout(function() {
                                    $('#new-question-category-error-message').fadeOut();
                                }, 5000);
                            }
                            if (!questionContent) {
                                $('#edit-question-content-error-message').fadeIn();
                                setTimeout(function() {
                                    $('#edit-question-content-error-message').fadeOut();
                                }, 5000);
                            }
                    }});
                });

                //edit question
                $(document).on('click', '.dropdown-item-edit', function() {
                    const questionId = $(this).data('id');
                    const questionText = $(`#question-card-${questionId} .card-text`).text().trim();
                    $('#edit-question-text').val(questionText);
                    $('#editQuestionModal').modal('show');
                    
                    $('#save-question-btn').off('click').on('click', function() {
                        const newQuestionText = $('#edit-question-text').val().trim();
                        if (newQuestionText === questionText) {
                            $('#edit-question-error-message').fadeIn();
                            setTimeout(function() {
                                $('#edit-question-error-message').fadeOut();
                            }, 5000);
                        } else {
                            $('#edit-question-error-message').hide();
                            
                            $.ajax({
                                url: "{{ route('question.edit') }}",
                                type: 'POST',
                                data: {
                                    question_id: questionId,
                                    content: newQuestionText,
                                    _token: '{{ csrf_token() }}'
                                },

                                success: function(response) {
                                    $(`#question-card-${questionId} .card-text`).text(newQuestionText);
                                    $('#editQuestionModal').modal('hide');
                                },

                                error: function() {
                                    alert('An error occurred while updating the question.');
                                }
                            });
                        }
                    });
                });

                //delete question
                $(document).on('click', '.dropdown-item-delete', function() {
                    const questionId = $(this).data('id');
                    $('#deleteQuestionModal').modal('show');
                    
                    $('#delete-question-btn').off('click').on('click', function() {
                        $.ajax({
                            url: "{{ route('question.delete') }}",
                            type: 'POST',
                            data: {
                                question_id: questionId,
                                _token: '{{ csrf_token() }}'
                            },

                            success: function(response) {
                                $('#deleteQuestionModal').modal('hide');
                                $('#question-card-' + questionId).remove();
                            },

                            error: function() {
                                alert('An error occurred while updating the question.');
                            }
                        });
                        
                    });
                });

                //edit answer
                $(document).on('click', '.dropdown-item-edit-answer', function() {
                    const answerId = $(this).data('id');
                    const answerText = $(`#answer-card-${answerId} .card-text`).text().trim();
                    $('#edit-answer-text').val(answerText);
                    $('#editAnswerModal').modal('show');
                    
                    $('#save-answer-btn').off('click').on('click', function() {
                        const newAnswerText = $('#edit-answer-text').val().trim();
                        if (newAnswerText === answerText) {
                            $('#edit-answer-error-message').fadeIn();
                            setTimeout(function() {
                                $('#edit-answer-error-message').fadeOut();
                            }, 5000);
                        } else {
                            $('#edit-answer-error-message').hide();
                            
                            $.ajax({
                                url: "{{ route('answer.edit') }}",
                                type: 'POST',
                                data: {
                                    answer_id: answerId,
                                    content: newAnswerText,
                                    _token: '{{ csrf_token() }}'
                                },

                                success: function(response) {
                                    $(`#answer-card-${answerId} .card-text`).text(newAnswerText);
                                    $('#editAnswerModal').modal('hide');
                                },

                                error: function() {
                                    alert('An error occurred while updating the amswer.');
                                }
                            });
                        }
                    });
                });

                //delete answer
                $(document).on('click', '.dropdown-item-delete-answer', function() {
                    const answerId = $(this).data('id');
                    $('#deleteAnswerModal').modal('show');
                    
                    $('#delete-answer-btn').off('click').on('click', function() {
                        $.ajax({
                            url: "{{ route('answer.delete') }}",
                            type: 'POST',
                            data: {
                                answer_id: answerId,
                                _token: '{{ csrf_token() }}'
                            },

                            success: function(response) {
                                $('#deleteAnswerModal').modal('hide');
                                let answerId = response.data.id;
                                let questionId = response.data.question_id;
                                updateQuestionCard(questionId);
                                $('#answer-card-' + answerId).remove();
                            },

                            error: function() {
                                alert('An error occurred while updating the answer.');
                            }
                        });
                        
                    });
                });

                //best answer
                $(document).on('click', '.dropdown-item-best-answer', function() {
                    const answerId = $(this).data('id');
                    $.ajax({
                        url: "{{ route('answer.best') }}",
                        type: 'POST',
                        data: {
                            answer_id: answerId,
                            _token: '{{ csrf_token() }}'
                        },

                        success: function(response) {
                            let answerId = response.data.id;
                            let questionId = response.data.question_id;
                            updateQuestionCard(questionId);
                            $('#answer-card-' + answerId).replaceWith(defineAnswerHtml(response.data));
                        },

                        error: function(response) {
                            console.log(response.errorMessage);
                            alert('An error occurred.');
                        }
                    });
                });

                //show question answers
                $(document).ready(function() {
                    $('#answersModal').on('show.bs.modal', function (e) {
                        const questionId = $(e.relatedTarget).data('question-id');

                        $.ajax({
                            url: '/answers/index',
                            method: 'POST',
                            data: {
                                question_id: questionId,
                                order_by: 'latest',
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                let answersHtml = '';
                                if(response.data.length > 0) {
                                    response.data.forEach(answer => {
                                        answersHtml += defineAnswerHtml(answer);
                                    });
                                } else {
                                    answersHtml = '<p>No answers</p>';
                                }

                                $('#answersContainer').html(answersHtml);
                            },
                            error: function() {
                                $('#answersContainer').html('<p>error</p>');
                            }
                        });
                    });
                });

                //bring questions according to the specified data
                function fetchQuestions() {
                    let dataToSend = {
                        category_id: selectedCategory,
                        filter_with: selectedFilter,
                        order_by: selectedOrder,
                        _token: '{{ csrf_token() }}'
                    };

                    if (search) {
                        dataToSend.search = search;
                    }

                    $.ajax({
                        url: "{{ route('questions.get') }}",
                        type: 'POST',
                        data: dataToSend,
                        success: function(response) {
                            renderQuestions(response.data);
                        },
                        error: function() {
                            $('#questions-list').html('<p class="text-center text-danger">An error occurred while fetching questions.</p>');
                        }
                    });
                }

                //render questions
                function renderQuestions(questions) {
                    let questionsHtml;
                    if (questions.length > 0) {
                        questionsHtml = questions.map(question => defineQuestionHtml(question)).join('');
                    } else {
                        questionsHtml= defineNoQuestionHtml();
                    }
                    $('#questions-list').html(questionsHtml);
                }
            });

            function defineQuestionHtml(question) {
                return `
<div id="question-card-${question.id}" class="col-md-12 mt-3">
    <div class="card p-0 pt-3 m-0 mb-2 shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="card-title mb-0 text-primary font-weight-bold" style="font-size: 1.1rem;">
                    ${question.user_name} ${question.created_at == question.updated_at ? `` : `<small class="text-secondary" style="font-size: 0.85rem;"> edited</small>`}
                </h6>
                <div class="text-muted" style="font-size: 0.85rem;">
                    <i class="far fa-clock"></i> ${new Date(question.created_at).toLocaleDateString()}
                    ${question.user_id == {{Auth::id()}} ? `
                    <div class="dropdown ms-2" style="display: inline-block">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><button class="dropdown-item dropdown-item-edit" id="question-${question.id}-edit" data-id="${question.id}">Edit</button></li>
                            <li><button class="dropdown-item dropdown-item-delete" id="question-${question.id}-delete" data-id="${question.id}">Delete</button></li>
                        </ul>
                    </div>` : ``}
                </div>
            </div>
            
            <p class="card-text mb-3" style="font-size: 1.2rem; color: #343a40;">
            ${question.answered ? `<p class="p-2 pt-0 pb-0" style="display: inline-block; background-color: dodgerblue; color: aliceblue; border-radius: 10px;">Answered</p>` : ``}
                ${question.content}
            </p>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    ${question.my_like != null ? `<button class="btn btn-success me-2 like-btn active" data-id="${question.id}">Liked</button>` : `<button class="btn btn-outline-success me-2 like-btn" data-id="${question.id}">Like</button>`}
                </div>
                <div>
                    <button type="button" class="btn btn-light likes-btn" disabled>${question.likes_count} Likes</button>
                    ${question.answers_count > 0 ? `<button type="button" class="btn btn-light answers-btn" data-question-id="${question.id}" data-bs-toggle="modal" data-bs-target="#answersModal">${question.answers_count} Answers</button>` : `<button type="button" class="btn btn-light answers-btn" disabled>${question.answers_count} Answers</button>`}
                </div>
            </div>
        </div>
        ${question.answered ? `` : `
        <div class="card-footer">
            <div class="mb-2">
                <div class="input-group" style="height: 40px">
                    <input type="text" class="form-control answer-input" id="question-${question.id}-answer" placeholder="Answer the question..." style="border-radius: 20px 0 0 20px;">
                    <button class="btn btn-primary answer-btn" data-id="${question.id}" style="border-radius: 0 20px 20px 0;">Answer</button>
                </div>
                <small class="error-message" id="question-${question.id}-answer-error-message" style="color: red; display: none; font-size: 12px; margin-top: 5px;">Please write an answer before submitting.</small>
            </div>
        </div>`}
    </div>
</div>

`;
            }

            function defineNoQuestionHtml() {
                return `
<div class="col-md-12 mt-3">
    <div class="card p-3 mb-3 shadow-sm">
        <div class="card-body">
            <p class="card-text m-3 text-center" style="font-size: 1rem;">No results found!</p>
        </div>
    </div>
</div>
`;
            }

            function defineAnswerHtml(answer) {
                return `
<div id="answer-card-${answer.id}" class="col-md-12 mt-3">
    <div class="card shadow-sm p-3">
        <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="card-title mb-0 font-weight-bold text-primary" style="font-size: 1.1rem;">
                    ${answer.user_name} ${answer.created_at == answer.updated_at ? `` : `<small class="text-secondary" style="font-size: 0.85rem;"> edited</small>`}
                </h6>
                <div class="text-muted" style="font-size: 0.85rem;">
                    <i class="far fa-clock"></i> ${new Date(answer.created_at).toLocaleDateString()}
                    ${answer.user_id == {{Auth::id()}} || (answer.questioner_id == {{Auth::id()}} && answer.question_answered != true) ? `
                    <div class="dropdown ms-2" style="display: inline-block">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            ${answer.user_id == {{Auth::id()}} ? `
                            <li><button class="dropdown-item dropdown-item-edit-answer" id="answer-${answer.id}-edit" data-id="${answer.id}">Edit</button></li>
                            <li><button class="dropdown-item dropdown-item-delete-answer" id="answer-${answer.id}-delete" data-id="${answer.id}">Delete</button></li>
                            ` : ``}
                            ${(answer.questioner_id == {{Auth::id()}} && answer.question_answered != true) ? `
                            <li><button class="dropdown-item  dropdown-item-best-answer" id="answer-${answer.id}-best" data-id="${answer.id}">Mark as the best</button></li>
                            ` : ``}
                        </ul>
                    </div>` : ``}
                </div>
            </div>
            <p class="card-text mb-3" style="font-size: 1.1rem; color: #343a40;">
                ${answer.best ? `<p class="p-2 pt-0 pb-0" style="display: inline-block; background-color: green; color: aliceblue; border-radius: 10px;">Best Answer</p>` : ``}
                ${answer.content}
            </p>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    ${answer.my_like != null ? `<button class="btn btn-success me-2 answer-like-btn active" data-id="${answer.id}">Liked</button>` : `<button class="btn btn-outline-success me-2 answer-like-btn" data-id="${answer.id}">Like</button>`}
                </div>
                <div>
                    <button type="button" class="btn btn-light likes-btn" disabled style="border: 0">${answer.likes_count} Likes</button>
                </div>
            </div>
        </div>
    </div>
</div>

`;
            }



        </script>
    @endsection
