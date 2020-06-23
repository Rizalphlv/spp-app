<div class="modal fade bd-example-modal-lg" id="@yield('id-modal')" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        {{-- modal header --}}
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">@yield('modal-title')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            {{-- url route from form --}}
            <form action="@yield('url-route')" method="post" enctype="multipart/form-data">
                @csrf
            @yield('form')
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">@yield('action')</button>
            </form>
        </div>

      </div>
    </div>
</div>

  