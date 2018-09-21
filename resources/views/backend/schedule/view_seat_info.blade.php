@include('branches.header')
{{--as from controller--}}
{{--0 for available(blue)--}}
{{--1 for reserved (green)--}}
{{--2 for booked (grey)--}}
<style>
    .busSeat {
        text-align: center;
        min-height: 294px;
        border: 2px dashed red;
        margin-top: 20px;
        border-radius: 21px;
        width: 638px;
    }

    .bus .seats {
        width: 32px;
        border-radius: 7px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 13px;
        height: 37px;
        background: #5fa7da;
        transition: box-shadow 0.3s ease-in-out;
    }
    .front .seats {
        width: 32px;
        border-radius: 7px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 13px;
        height: 37px;
        background: salmon;
        transition: box-shadow 0.3s ease-in-out;
    }

    .bus .booked {
        background: grey;
    }

    .bus .reserved {
        background: green;
    }


    /* Hide the browser's default checkbox */
    .seats input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .smhtn .btn {
        display: inline-flex;
    }

</style>

<section id="about-us" class=" page-section">

    <div class="container">
        <div class="row">
            <div class="col-md-4"><h1 class="h3 text-center text-danger">1.Select your route</h1>
            </div>
            <div class="col-md-4"><h1 class="h3 text-center text-primary">2.Select your Seat</h1>
                <p>Green:Reserved Grey:Booked Blue:Availabe </p><p>D=Driver and E=Entry</p>
            </div>
            <div class="col-md-4"><h1 class="h3 text-center text-danger">3.Book your ticket</h1>
            </div>
        </div>
        <form action="{{route('passengerDetail')}}" method="post">
            {{@csrf_field()}}
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="busSeat">
                        <span style="color: red">Bus Seat Layout</span>
                        <div class="row ">
                            <div class="col-md-11">
                                <div class="bus">
                                    @foreach($seat as $key => $item)
                                        <div class="col-md-1">
                                            <div class="seats back
                                            <?php
                                            if($item['profile']==2)echo "booked";
                                            elseif($item['profile']==1) echo "reserved";
                                            ?>" data-id="{{$key}}" style="{{$item['style']}}">
                                                <div class="special-attributes"></div>
                                                @if(isset($item['name'])){{$item['name']}}@else 11A @endif
                                                <input type="checkbox" name="seat_id[]" id="{{$key}}" value="{{$item['id']}}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="front">
                                    <div class="col-md-1">
                                        <div class="seats" data-id="0" style="{{$front[0]['style']}}">
                                            <div class="special-attributes"></div>
                                            D

                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="seats" data-id="1" style="{{$front[1]['style']}}">
                                            <div class="special-attributes"></div>
                                            E
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <input type="hidden" name="buses_id" value="{{$buses_id}}">
                    <input type="hidden" name="schedules_id" value="{{$schedules_id}}">
                    <button class=" btn btn-sm pull-right btn-success" type="submit">Proceed <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>


</section>
<script>
    $(document).ready(function () {
        $('.bus').find('.back').click(function () {
            var checked = $(this).find(":input").is(':checked');
            if (!checked) {
                $(this).find(":input").attr('checked', true);
                $(this).find(':input').prop('checked', true);
                $(this).css({"background": "red"});
            } else {
                $(this).find(":input").attr('checked', false);
                $(this).find(':input').prop('checked', false);
                $(this).css({"background": "#5fa7da"});
            }

        });

    });

</script>

@include('branches.footer')
