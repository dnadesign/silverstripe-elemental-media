<% if $Image %>
  <style>
  .element#{$Anchor} .intrinsic:after {
    padding-bottom: calc($Image.Height / $Image.Width * 100%);
  }
  </style>
<% end_if %>

<div class="element-media__content-container">
  <div class="element-media__content">
    <div class="element-media__text-container">
      <% if $ShowTitle %>
        <h3 class="element-media__title">{$Title}</h3>
      <% end_if %>

      <% if $Text %>
        <p>{$Text}</p>
      <% end_if %>

      <% if $MediaLink %>
        <% with $MediaLink %>
          {$renderWith('DNADesign\Elemental\Models\MediaLink')}
        <% end_with %>
      <% end_if %>
    </div>
  </div>
</div>

<% if $Image || $Video %>
  <div class="element-media__media">
    <% if $Image %>
      <div class="intrinsic element-media__image">
        {$Image.Lazyloaded}
      </div>
    <% end_if %>

    <% if $Video %>
      {$Video}
    <% end_if %>
  </div>
<% end_if %>
