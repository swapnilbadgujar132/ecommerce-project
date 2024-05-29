@extends('layouts.faq')

@section('faq')

@foreach ($data as $item)
<div id="yourAccount" class="faq-category">
  <h3 class="mb-4">{{$item->title}}</h3>



<div class="col-11 col-xl-10">
  <div class="accordion accordion-flush" id="faqAccount">

    <div class="accordion-item bg-transparent border-top border-bottom py-3">
      <h2 class="accordion-header" id="faqAccountHeading1">
        <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse1" aria-expanded="false" aria-controls="faqAccountCollapse1">
          {{$item->question}}
        </button>
      </h2>

      <div id="faqAccountCollapse1" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading1">
        <div class="accordion-body">
          <p>{{$item->answer}}</p>
        </div>
      </div>

    </div>
    @endforeach

  </div>
</div>
</div>

@endsection