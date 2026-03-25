@props(['post'])

<div class="discussion-area section_padding_100_0">
    <!-- Comment Area Start -->
    <div class="comment_area mb-50 clearfix">
        <div class="gazette-heading">
            <h4 class="font-pt">Discussie</h4>
        </div>

        <ol>
            <!-- Single Comment Area -->
            <li class="single_comment_area">
                <div class="comment-wrapper d-md-flex align-items-start">
                    <!-- Comment Meta -->
                    <div class="comment-author">
                        <img src="https://ui-avatars.com/api/?name=Gast+Gebruiker&background=random" alt="Avatar">
                    </div>
                    <!-- Comment Content -->
                    <div class="comment-content">
                        <h5>Gast Gebruiker</h5>
                        <span class="comment-date font-pt">{{ now()->format('F d, Y') }}</span>
                        <p>Dit is een placeholder voor de discussie. Binnenkort kun je hier reageren op dit artikel en meepraten met andere lezers.</p>
                        <a class="reply-btn" href="#">Beantwoorden <i class="fa fa-reply" aria-hidden="true"></i></a>
                    </div>
                </div>
            </li>
        </ol>
    </div>

    <!-- Leave A Comment -->
    <div class="leave-comment-area clearfix">
        <div class="gazette-heading">
            <h4 class="font-pt">Laat een reactie achter</h4>
        </div>

        <!-- Comment Form Placeholder -->
        <div class="comment-form-placeholder border p-4 bg-light text-center">
            <p class="mb-3">Het reactiesysteem is momenteel in onderhoud. Kom later terug om je mening te delen.</p>
            <form action="#" method="post" onsubmit="return false;" class="opacity-50">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Naam" disabled>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" disabled>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Bericht" disabled></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn leave-comment-btn" disabled>Plaats reactie <i class="fa fa-angle-right ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
