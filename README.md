# Lara-Pack Livewire Quill

Lara-Pack Livewire Quill is a [Livewire 3 & 4](https://livewire.laravel.com/) component that simplifies the integration of the [Quill.js](https://quilljs.com/) rich text editor into your Laravel application.

## Installation

Add this package to your Laravel application using Composer:

```bash
composer require lara-pack/livewire-quill
```

> **Note:** Adjust the command above according to your repository or local installation of this package.

## Preparation (Quill.js Assets)

Since this component depends on the Quill.js library, ensure you have included Quill's default CSS and JavaScript in your application's main layout (e.g., in `resources/views/layouts/app.blade.php`).

```html
<head>
  <!-- ... other tags ... -->

  <!-- Theme included stylesheets -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
  <!-- If you want to use the 'bubble' theme, add: -->
  <!-- <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet"> -->
</head>
<body>
  <!-- ... body content ... -->

  <!-- Main Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</body>
```

## Usage

Use the `<livewire:...>` tag in your Blade files or Livewire component views. You can perform direct data binding using `wire:model` thanks to Livewire 3's `#[Modelable]` feature.

### Basic Example

```html
<livewire:lara-pack.livewire-quill wire:model="description" />
```

### Additional Properties Configuration

You can also configure the editor theme and the update delay (debounce) using the following properties:

- `theme` (optional): Quill editor theme (`'snow'` or `'bubble'`). **Default:** `'snow'`
- `debounceTime` (optional): Update delay time in milliseconds (ms). **Default:** `500`

**Full example:**

```html
<livewire:lara-pack.livewire-quill
  wire:model="description"
  theme="bubble"
  debounceTime="1000"
/>
```

## Component Features

- Supports `wire:model` (two-way data binding).
- Can be used for multiple instances on a single page (IDs are generated using UUID).
- Built-in debounce to optimize server requests while the user is typing.
- Supports basic toolbar color customization pre-configured in the component script.

## License

[MIT License](LICENSE)
