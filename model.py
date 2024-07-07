import sqlite3

class Database():
    def __init__(self):
        self.conn = sqlite3.connect('f9ki3.db')
    
    def createTablePortfolio(self):
        conn = self.conn
        cursor = conn.cursor()
        cursor.execute('''
            CREATE TABLE IF NOT EXISTS portfolio 
                       (id INTEGER PRIMARY KEY AUTOINCREMENT,
                        title TEXT,
                        description TEXT,
                        img1 TEXT,
                        img2 TEXT,
                        img3 TEXT,
                        img4 TEXT,
                        img5 TEXT,
                        type TEXT
                       )
        ''')
        conn.close()

class Portfolio():
    def addPortfolioRecord(self, title, description, img1, img2, img3, img4, img5, type):
        data = title, description, img1, img2, img3, img4, img5, type
        conn = Database().conn
        cursor = conn.cursor()
        cursor.execute('''
            INSERT INTO portfolio (title, description, img1, img2, img3, img4, img5, type) VALUES (?,?,?,?,?,?,?,?) ''', data)
        conn.commit()
        print('Added New Record!')
        conn.close()

class Accounts():
    def __init__(self):
        self.username = 'f9ki3'
        self.password = 'HappyLittleAccident'