@if(count($objAnnouncement) > 0)
    <div id="v4-image-slide-wrap" style="margin-bottom: 32px;">
    <div id="v4-image-wrap">
        @php $index = 1 @endphp
        @for($i = 0; $i < count($objAnnouncement); $i++)
            <section class="slideecon slide-{{ $index }}">
                <div class="v4-slider-panel v4-slider-mb-24">
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;"><span class="v4-slider-panel-header-text">{{ $objAnnouncement[$i]['short_description'] }}</span></div>
                </div>
                <div class="row v4-slide-row-margin-none">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="{{ Storage::url("images/760x480/" . $objAnnouncement[$i]['thumb_file']) }}">
                        <div class="v4-slide-more"><a href="{{ url($objAnnouncement[$i]['slug']) }}" class="bold">Read More ...</a></div>
                    </div>
                </div>
            </section>
        @php $index++; @endphp
        @endfor
    </div>
</div>
<div class="mt-4 mb-3 text-right">
    <button id="{{ rand() }}" class="btn-landing-prev v4-btn-prev" style="float: right; margin-bottom: 32px; margin-right: 8px;">‹ Previous</button>
    <button id="{{ rand() }}" class="btn-landing-next v4-btn-next" style="float: right; margin-bottom: 32px;">Next ›</button>
    <button id="{{ rand() }}" class="btn-landing-close" style="float: right; margin-bottom: 32px;">Close »</button>
</div>
<script src="{{ URL::asset('js/welcome.min.js') }}"></script>
@else
    <div><p>No record found</p></div>
@endif