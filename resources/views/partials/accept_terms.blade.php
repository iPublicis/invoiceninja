{!! Former::open('/accept_terms')->id('acceptTermsForm')->rules([
        'accepted_terms' => 'required',
    ]) !!}

<div class="modal fade" id="acceptTermsModal" tabindex="-1" role="dialog"
    data-backdrop="static" aria-labelledby="acceptTermsModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">{{ trans('texts.terms_of_service') }}</h4>
        </div>

        <div class="container" style="width: 100%; padding-bottom: 0px !important">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Former::checkbox('accepted_terms')->text(trans('texts.agree_to_terms', [
                        'terms' => link_to(Utils::getTermsLink(), trans('texts.terms_of_service'), ['target' => '_blank']),
                        'privacy' => link_to(Utils::getPrivacyLink(), trans('texts.privacy_policy'), ['target' => '_blank']),
                    ]))->raw()->value(1) !!}
                </div>
            </div>
        </div>

        <div class="modal-footer">
            {!! Button::success(trans('texts.accept'))->submit() !!}
        </div>
    </div>
</div>
</div>

{!! Former::close() !!}

<script type="text/javascript">

function acceptLatestTerms()
{
    $('#acceptTermsForm').submit();
}

$(function() {
    $('#acceptTermsModal').modal('show');
})

</script>
