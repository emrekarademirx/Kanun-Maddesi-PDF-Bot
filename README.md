# Kanun Maddesi PDF Bot

Bu bot, kullanıcının botunuza gönderdiği mesajlar aracılığıyla istenilen kanun maddesini PDF'den alır ve cevap olarak kullanıcıya gönderir. Bu proje, Python veya PHP kullanarak Telegram botu oluşturmak isteyenler için bir örnektir.

## Kullanım

Telegram'da, botunuza bir mesaj gönderin ve kanun maddesi numarasını girin. Bot, kanun maddesinin PDF'den alınan metnini cevap olarak gönderecektir.

## Gereksinimler

### Python

- Python 3.0 veya daha yeni sürümü
- `telebot` ve `PyPDF2` Python kütüphaneleri

### PHP

- PHP 5.6 veya daha yeni sürümü
- `setasign/Fpdi` PHP kütüphanesi

## Kurulum

### Python

1. Python 3.0 veya daha yeni sürümünü indirin ve yükleyin.
2. `telebot` ve `PyPDF2` Python kütüphanelerini yükleyin: `pip install telebot PyPDF2`
3. `main.py` dosyasını indirin ve API token'ınızı dosyanın içindeki 'TOKEN' kelimesiyle değiştirin.
4. `1.5.5237.pdf` PDF dosyasını indirin ve aynı dizine kaydedin.
5. Terminal veya komut istemi açın ve `python main.py` komutunu çalıştırın.

### PHP

1. PHP 5.6 veya daha yeni sürümünü yükleyin.
2. `setasign/Fpdi` PHP kütüphanesini yükleyin: `composer require setasign/fpdi`
3. `index.php` dosyasını indirin ve API token'ınızı ve chat ID'nizi dosyanın içindeki değişkenlerle değiştirin.
4. `1.5.5237.pdf` PDF dosyasını indirin ve aynı dizine kaydedin.
5. Web sunucunuza FTP aracılığıyla `index.php` dosyasını yükleyin ve web sunucunuzu yeniden başlatın.

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Daha fazla bilgi için LICENSE dosyasını inceleyin.```

Bu README dosyasını proje dizininize ekleyebilirsiniz. Ayrıca, projenizle ilgili herhangi bir ek bilgi veya kullanım talimatı varsa, bu dosyaya ekleyebilirsiniz.
