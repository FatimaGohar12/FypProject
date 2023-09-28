import pickle
from sklearn.feature_extraction.text import CountVectorizer

model_LR=pickle.load(open('./model/model_LR.sav' , 'rb'))

vec = pickle.load(open('./model/vec.pickle', 'rb'))

input_value = sys.argv[1]

# comment1 = ["100% of daily 1.50 GB data quota exhausted as on 26-May-23 00:31. Jio Number : Daily high speed data quota will be restored on 26-May-23 01:04.To know where you have consumed your data quota, click "]
vect = vec.transform(input_value).toarray()

print(model_LR.predict(vect))

# vec = CountVectorizer(min_df=10)
# # Get the input value from the command-line arguments
# input_value = sys.argv[1]
# # comment1 = ["100% of daily 1.50 GB data quota exhausted as on 26-May-23 00:31. Jio Number : Daily high speed data quota will be restored on 26-May-23 01:04.To know where you have consumed your data quota, click "]
# vect = vec.transform(input_value).toarray()
# print(model_LR.predict(vect))