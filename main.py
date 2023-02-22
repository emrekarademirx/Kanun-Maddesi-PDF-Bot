import telebot
import PyPDF2

bot = telebot.TeleBot('BOT_TOKEN')

with open('1.5.5237.pdf', 'rb') as pdf_file:
    pdf_reader = PyPDF2.PdfFileReader(pdf_file)
    num_pages = pdf_reader.getNumPages()

@bot.message_handler(func=lambda message: True)
def send_law_article(message):
    try:
        article_number = int(message.text)
        if article_number < 1 or article_number > num_pages:
            raise ValueError('Invalid article number')
        page = pdf_reader.getPage(article_number - 1)
        text = page.extractText()
        bot.reply_to(message, text)
    except ValueError:
        bot.reply_to(message, 'Geçersiz madde numarası. Lütfen doğru bir madde numarası girin.')
    except Exception:
        bot.reply_to(message, 'Bir hata oluştu. Lütfen tekrar deneyin.')

bot.polling()
