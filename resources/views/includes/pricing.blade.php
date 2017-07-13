@if($prod->price)

    @if($prod->sale)

        <del class="regular">{{$prod->price}} AMD</del>

        @if($prod->sale >= 100 )

            <small class="regular">{{$prod->sale}} AMD</small>

        @else

            @php
                $sale = $prod->price / 100;
                $sale = $sale * $prod->sale;
                $sale = $prod->price - $sale;
            @endphp

            <small class="regular">{{$sale}} AMD</small>
        @endif
    @else

        <small class="regular">{{$prod->price}} AMD</small>

    @endif

@elseif($prod->filters->first())
    @if($prod->filters->min('price'))
        @php($price = $prod->filters->min('price'))
        @if($prod->sale)

            <del class="regular">{{$prod->filters->min('price')}} AMD</del>


            @if($prod->sale >= 100 )

                <small class="regular">{{$prod->sale}} AMD</small>

            @else

                @php
                    $sale = $prod->filters->min('price') / 100;
                    $sale = $sale * $prod->sale;
                    $sale = $prod->filters->min('price') - $sale;
                @endphp

                <small class="regular">{{$sale}} AMD</small>
            @endif
        @else
            @php($sale = $prod->filters->where('price', $price)->where('sale','!=', null)->first())
            @if(isset($sale))
                <del class="regular">{{$prod->filters->min('price')}} AMD</del>

                @if($sale->sale >= 100 )

                    <small class="regular">{{$sale->sale}} AMD</small>

                @else

                    @php
                        $sale1 = $sale->price / 100;
                        $sale1 = $sale1 * $sale->sale;
                        $sale1 = $sale->price - $sale1;
                    @endphp
                    <small class="regular">{{$sale1}} AMD</small>
                @endif
                @else
                <small class="regular">{{$price = $prod->filters->min('price')}} AMD</small>
            @endif
        @endif
    @endif

@endif

