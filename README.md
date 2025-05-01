# 📧 Laravel Email Read Tracker

A lightweight Laravel package to track whether your sent emails have been opened by embedding a tracking pixel.

Developed by [@shuklajasmin](https://github.com/shuklajasmin)

---

## 🚀 Installation

Install the package via Composer:

```bash
composer require shuklajasmin/track

```

Run the install command to publish necessary files (migrations, config, etc.):

```bash

php artisan shuklajasmin:install

```

## ⚙️ Integration

### Step 1: Generate Tracking Link


```base

$data = $this->createTrackingLog($recipient, $subject);
$this->subscriber = $data['campaign'];
$this->tracking = $data['tracking'];

```

### Step 2: Add Tracking Pixel to Email


```base

<img 
    src="{{ route('email.track', ['id' => $subscriber->id, 'campaign' => $subscriber->id]) }}" 
    width="1" 
    height="1" 
    alt="." 
/>

```
