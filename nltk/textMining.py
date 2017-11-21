import nltk
# nltk.download()
from nltk.tokenize import sent_tokenize, word_tokenize
from nltk.corpus import stopwords
from nltk.stem import PorterStemmer

ps = PorterStemmer()


# EXAMPLE_TEXT = "This is a sample sentence, showing off the stop words filtration."
example_sent = "This is a sample sentence, showing off the stop words filtration."
# example_words = ["python","pythoner","pythoning","pythoned","pythonly"]
new_text = "It is important to by very pythonly while you are pythoning with python. All pythoners have pythoned poorly at least once."


stop_words = set(stopwords.words('english'))

word_tokens = word_tokenize(example_sent)

filtered_sentence = [w for w in word_tokens if not w in stop_words]

filtered_sentence = []

for w in word_tokens:
    if w not in stop_words:
        filtered_sentence.append(w)



# tokenizing        
print(sent_tokenize(example_sent))
print("----------------hasil tokenizing--------------")
print(word_tokenize(example_sent))

# filtering
print("----------------hasil filtering--------------")
# print(word_tokens)
print(filtered_sentence)

print("----------------hasil stemming--------------")
# stemming
words = word_tokenize(example_sent)
for w in filtered_sentence:
    print(ps.stem(w))