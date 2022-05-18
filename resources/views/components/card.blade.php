@props(['property'])

<div class="card-box-a card-shadow">
    <div class="img-box-a">
        <img src="{{ $property->Image() }}" style="height: 400px" alt="{{ $property->PropertyName }}"
            class="img-a img-fluid">
    </div>
    <div class="card-overlay">
        <div class="card-overlay-a-content">
            <div class="card-header-a">
                <h2 class="card-title-a">
                    <a href="{{ route('property.show', $property->id) }}">
                        {{ $property->PropertyName }}
                    </a>
                </h2>
            </div>
            <div class="card-body-a">
                <div class="price-box d-flex">
                    <span class="price-a">{{ $property->status }} |
                        ₹ {{ $property->price }}</span>
                </div>
                <a href="{{ route('property.show', $property->id) }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                </a>
            </div>
            <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                    <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>{{ $property->area }}m
                            <sup>2</sup>
                        </span>
                    </li>
                    <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>{{ $property->Beds }}</span>
                    </li>
                    <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>{{ $property->Baths }}</span>
                    </li>
                    <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>{{ $property->garage }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
